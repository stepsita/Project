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
        contrato_plane::create([
            'operador'=> $request['operador'],
            'plan'=> $request['plan'],
            'estado_plan'=> $request['estado_plan'],
            'linea'=> $linea['id']
        ]);
        return redirect('buscar-clientes');
    }

    /**
     * Display the specified resource.
     */
    public function show($linea)
    {
        $data['datos'] = cliente::join('lineas', 'clientes.cedula', '=', 'lineas.cedula')
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
        //return $data;
        return view ('porfile-customer', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($linea)
    {
        $data = cliente::join('lineas', 'clientes.cedula', '=', 'lineas.cedula')
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
            'contrato_planes.id AS id_cp',
            'contrato_servicios.id AS id_cs'
        ])
        ->where('lineas.numero','=', $linea)->get();
        //return $data;
        $plan=plane::all();
        $servicio=servicio::all();
        $operador = operadore::where('email', Auth::user()->email)->firstOrFail();
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

     public function update(Request $request, $linea)
     {
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
        $linea = [
            'pago' => $update['pago']
        ];
        $contrato_planes = [
            'plan' => $update['plan'],
            'operador' => $update['operador']
        ];
        $contrato_servicios = [
            'servicio' => $update['servicio'],
            'operador' => $update['operador']
        ];
         linea::where("numero", $linea)->update($linea);
         cliente::where("cedula", $request['cedula'])->update($cliente);
         contrato_plane::where("id", $request['id_cp'])->update($contrato_planes);
         contrato_servicio::where("id", $request['id_cs'])->update($contrato_servicios);

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

        dd($idLinea);



        $data = cliente::join('lineas', 'clientes.cedula', '=', 'lineas.cedula')
        ->join('contrato_planes','lineas.id','=','contrato_planes.linea')
        ->leftjoin('contrato_servicios','lineas.id','=','contrato_servicios.linea')
        ->select([
            'clientes.*',
            'lineas.*',
            'contrato_planes.*',
            'contrato_servicios.*',
            'lineas.id AS id_linea',
            'contrato_planes.id AS id_cp',
            'contrato_servicios.id AS id_cs'
        ])
        ->where('lineas.numero','=', $linea)->get();
        $operador = operadore::where('email', Auth::user()->email)->firstOrFail();

        linea::where("id", $data['id_linea'])
        ->update(['estado_linea'=>0]);
        contrato_plane::where("id", $data['id_cp'])
        ->update(['estado_plan'=>0]);
        contrato_servicio::where("id", $data['id_cs'])
        ->update(['estado_servicio'=>0]);
        //return $update;
        return redirect('buscar-operador');
    }
}
