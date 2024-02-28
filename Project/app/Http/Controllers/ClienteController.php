<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\cliente;
use App\Models\linea;
use App\Models\plane;
use App\Models\servicio;
use App\Models\contrato_plane;
use App\Models\operadore;
use App\Models\contrato_servicio;


use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['datos_clientes']=cliente::get();
        return view ('find-customer', $data);
        //llamado a linea y creo una nueva variable para esta 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['planes']=plane::get();
        return view ('form-customer-add', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate ([
            'nombre'=> ['required', 'string'],
            'apellido'=> ['required', 'string'],
            'fecha_nac'=> ['required', 'date'],
            'cedula'=> ['required', 'string', 'unique:clientes', 'max:8','min:8'], 
            'estado'=> ['required', 'string'],
            'ciudad'=> ['required', 'string'],
            'municipio'=> ['required', 'string'],
            'calle'=> ['required', 'string'],
            'correo' => ['required', 'string', 'email','unique:clientes'],
            'estado_cliente'=> ['required', 'string'],
        ]);
        cliente::create([
            'nombre'=> $request['nombre'],
            'apellido'=> $request['apellido'],
            'fecha_nac'=> $request['fecha_nac'],
            'cedula'=> $request['cedula'],
            'estado'=> $request['estado'],
            'ciudad'=> $request['ciudad'],
            'municipio'=> $request['municipio'],
            'calle'=> $request['calle'],
            'correo'=> $request['correo'],
            'estado_cliente'=> $request['estado_cliente'],
        ]);
        
        //agregar informacion a la base de datos
        $request->validate ([
            'cedula'=> ['required', 'string'], 
            'numero'=> ['required', 'string', 'unique:lineas'],
            'pago'=> ['required', 'string'],
            'estado_linea' => ['required', 'string'],
            'fecha'=> ['required', 'date'],
        ]);
        $linea= linea::create([
            'cedula'=> $request['cedula'],
            'numero'=> $request['numero'],
            'pago'=> $request['pago'],
            'estado_linea'=> $request['estado_linea'],
            'fecha'=> $request['fecha']
        ]);
        if ($request['pago']=='prepago'){
            contrato_plane::create([
                'operador'=> $request['operador'],
                'plan'=> $request['plan'],
                'estado_plan'=> $request['estado_plan'],
                'linea'=> $linea['id']
            ]);
        }
        return redirect('buscar-clientes');
    }

    /**
     * Display the specified resource.
     */
    public function show($linea)
    {
        $data = cliente::join('lineas', 'clientes.cedula', '=', 'lineas.cedula')->where('lineas.numero','=', $linea)->get();
        foreach ($data as $dat){
            if ($dat['pago']=='prepago'){
                $data= cliente::join('lineas', 'clientes.cedula', '=', 'lineas.cedula')
                 ->join('contrato_planes','lineas.id','=','contrato_planes.linea')
                 ->join('planes','planes.id','=','contrato_planes.plan')
                 ->leftjoin('contrato_servicios','lineas.id','=','contrato_servicios.linea')
                 ->leftjoin('servicios','servicios.id','=','contrato_servicios.servicio')
                 ->select([
                     'clientes.*',
                     'lineas.*',
                     'contrato_planes.*',
                     'contrato_servicios.*',
                     'planes.*',
                     'servicios.*',
                     'clientes.nombre AS nombre',
                     'clientes.estado AS estado',
                     'planes.nombre AS nombre_plan',
                     'servicios.nombre AS nombre_servicio',
                     'planes.precio AS precio_plan',
                     'servicios.precio AS precio_servicio'
                 ])
                 ->where('lineas.numero','=', $linea)->get();
            }
        }
        return view ('porfile-customer', with([
            'datos' => $data
        ])); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($linea)
    {
        $data= cliente::join('lineas', 'clientes.cedula', '=', 'lineas.cedula')
        ->join('contrato_planes','lineas.id','=','contrato_planes.linea')
        ->join('planes','planes.id','=','contrato_planes.plan')
        ->leftjoin('contrato_servicios','lineas.id','=','contrato_servicios.linea')
        ->leftjoin('servicios','servicios.id','=','contrato_servicios.servicio')
        ->select([
            'clientes.*',
            'lineas.*',
            'contrato_planes.*',
            'contrato_servicios.*',
            'planes.*',
            'servicios.*',
            'lineas.id AS id_linea',
            'clientes.nombre AS nombre',
            'clientes.estado AS estado',
            'planes.nombre AS nombre_plan',
            'servicios.nombre AS nombre_servicio',
            'planes.precio AS precio_plan',
            'servicios.precio AS precio_servicio',
            'contrato_servicios.id AS id_cs',
            'contrato_planes.id AS id_cp'
        ])
        ->where('lineas.numero','=', $linea)->get();
        $plan=plane::all();
        $servicio=servicio::all();
        $operador = operadore::where('email', Auth::user()->email)->firstOrFail();
         // dd($data);
        return view ('change-porfile-customer', with([
            'datos' => $data,
            'plan' => $plan,
            'servicio' => $servicio,
            'operador' => $operador,
        ])); 
    }

    /**
     * Update the specified resource in storage.
     */

     public function update(Request $request, $lineaid)
     {
        //dd($request);
         $update=$request->except('_token','_method');
         $cliente = [
            'nombre' => $update['nombre'],
            'apellido' => $update['apellido'],
            'cedula' => $update['cedula'],
            'fecha_nac' => $update['fecha_nac'],
            'correo' => $update['correo'],
            'estado' => $update['estado'],
            'ciudad' => $update['ciudad'],
            'municipio' => $update['municipio'],
            'calle' => $update['calle']
        ];
        
    
        if ($update['pago']=='postpago'){
            $linea = [
                'pago' => 'postpago'
            ];
            $contrato_planes = [
                'estado_plan'=>'0',
                'operador' => $update['operador']
            ];
            if (!empty($update['id_cs'])){ 
                $contrato_servicios = [
                    'estado_servicio'=>'0',
                    'operador' => $update['operador']
                ];
                contrato_servicio::where("id", $update['id_cs'])->update($contrato_servicios);
            }
            contrato_plane::where("id", $update['id_cp'])->update($contrato_planes);
        }
        if ($update['pago']=='prepago'){
            $linea = [
                'pago' => 'prepago'
            ];
            $contrato_planes = [
                'estado_plan'=>'1',
                'plan' => $update['plan'],
                'operador' => $update['operador'],
            ];
            contrato_plane::where("id", $update['id_cp'])->update($contrato_planes);
            if (is_null($update['id_cp'])){ 
                contrato_plane::create([
                    'operador' => $update['operador'],
                    'plan' => $update['plan'],
                    'estado_plan'=>'1',
                    'linea'=>  $update['linea']
                ]);
            }
            if ($update['servicio']==0){ 
                $contrato_servicios =contrato_servicio::find($update['id_cs']);
                $contrato_servicios->update([
                    'estado_servicio'=>'0',
                    'operador' => $update['operador'],
                ]);
                $contrato_servicios->save();
            }elseif ($update['id_cs']>0){ 
                $contrato_servicios = [
                    'estado_servicio'=>'1',
                    'servicio' => $update['servicio'],
                    'operador' => $update['operador'],
                ];
                contrato_servicio::where("id", $update['id_cs'])->update($contrato_servicios);
            }elseif (is_null($update['id_cs'])){ 
                contrato_servicio::create([
                    'operador' => $update['operador'],
                    'servicio' => $update['servicio'],
                    'estado_servicio'=>'1',
                    'linea'=>  $update['linea']
                ]);
            }
        }
         linea::where("numero", $lineaid)->update($linea);
         cliente::where("cedula", $request['cedula'])->update($cliente);
        
        //return $contrato_planes;
        return redirect('buscar-clientes');
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cliente $cliente)
    {
        //
    }
    public function updateDelete( $linea )
    {
        $idLinea = Linea::whereNumero($linea)->first()->id;
        Linea::whereNumero($linea)->update(['estado_linea' => 0]);
        contrato_plane::whereLinea($idLinea)->update(['estado_plan' => 0]);
        contrato_servicio::whereLinea($idLinea)->update(['estado_servicio' => 0]);

        return redirect('buscar-clientes');
    }
}
