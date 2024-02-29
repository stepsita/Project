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
    public function busquedadLinea(Request $request)
    {
        $datos_clientes=cliente::join('lineas', 'clientes.cedula', '=', 'lineas.cedula')->where('linea.numero', $request->linea)->get();
        return view('find-customer',['datos_clientes' => $datos_clientes]);
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
        $infoLinea= linea::whereNumero($linea)->first();
        $contratoPlanes=contrato_plane::latest()->whereLinea($infoLinea->id)->first();
        $contratoServicios=contrato_servicio::latest()->whereLinea($infoLinea->id)->first();
        
        if(is_null($contratoServicios))
        {
            $servicio=servicio::all();
        }else{
            $servicio=servicio::where('id',$contratoServicios->servicio)->first();
        }
        if(is_null($contratoPlanes))
        {
            $plan=plane::all();
        }else{
            $plan=plane::where('id',$contratoPlanes->plan)->first();
        }

        return view ('porfile-customer', with([
            'datos' => $data,   
            'plan' => $plan,
            'servicio' => $servicio,
            'contratoPlan'=> $contratoPlanes,
            'contratoServicio' => $contratoServicios,
            'infoLinea'=>$infoLinea
        ])); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($linea)
    {
        $data = cliente::join('lineas', 'clientes.cedula', '=', 'lineas.cedula')->where('lineas.numero','=', $linea)->get();
        $infoLinea= linea::whereNumero($linea)->first();
        $contratoPlanes=contrato_plane::latest()->whereLinea($infoLinea->id)->first();
        $contratoServicios=contrato_servicio::latest()->whereLinea($infoLinea->id)->first();
        
        if(is_null($contratoServicios))
        {
            $servicio=servicio::all();
        }else{
            $servicio=servicio::whereNot('id',$contratoServicios->servicio)->get();
        }
        if(is_null($contratoPlanes))
        {
            $plan=plane::all();
        }else{
            $plan=plane::whereNot('id',$contratoPlanes->plan)->get();
        }
        //  dd($contratoServicios);

        $operador = operadore::where('email', Auth::user()->email)->firstOrFail();
         // dd($data);
        return view ('change-porfile-customer', with([
            'datos' => $data,   
            'plan' => $plan,
            'servicio' => $servicio,
            'operador' => $operador,
            'contratoPlan'=> $contratoPlanes,
            'contratoServicio' => $contratoServicios,
            'infoLinea'=>$infoLinea
        ])); 
    }

    /**
     * Update the specified resource in storage.
     */

     public function update(Request $request, $lineaid)
     {
         $update=$request->except('_token','_method');
         $cliente=cliente::where("cedula", $request['cedula'])->firstOrFail();
        if ($cliente->correo != $request['correo']){
            $request->validate([
                'correo' => ['required', 'string', 'email','unique:clientes'],
            ]);
        }

        //  $cliente = [
        //     'nombre' => $update['nombre'],
        //     'apellido' => $update['apellido'],
        //     'cedula' => $update['cedula'],
        //     'fecha_nac' => $update['fecha_nac'],
        //     'correo' => $update['correo'],
        //     'estado' => $update['estado'],
        //     'ciudad' => $update['ciudad'],
        //     'municipio' => $update['municipio'],
        //     'calle' => $update['calle']
        // ];
        $linea = [
            'pago' => $update['pago'],
        ];
         linea::where("numero", $lineaid)->update($linea);
         $cliente->update($update);
         //cliente::where("cedula", $request['cedula'])->update($cliente);
        
        //return $contrato_planes;
        return redirect('buscar-clientes');

        }
        //editar plan
        public function updatep(Request $request, $lineaid) {
            $update=$request->except('_token','_method');
            $infoLinea= linea::whereId($lineaid)->first();
            if($infoLinea['pago']=='prepago'){
                contrato_plane::create([
                    'operador' => $update['operador'],
                    'plan' => $update['plan'],
                    'linea'=>  $lineaid
                ]);
            }elseif($infoLinea['pago']=='postpago'){
                return back()->withErrors([
                    'plan' => 'No se puede añadir un plan siendo postpago.',
                ]);
            }
           //return $contrato_planes;
           return redirect('buscar-clientes');
   
        }
        //editar servicio
        public function updates(Request $request, $lineaid) {
            $update=$request->except('_token','_method');
            $infoLinea= linea::whereId($lineaid)->first();
            if($infoLinea['pago']=='prepago'){
                contrato_servicio::create([
                    'operador' => $update['operador'],
                    'servicio' => $update['servicio'],
                    'linea'=>  $lineaid
                ]);
            }elseif($infoLinea['pago']=='postpago'){
                return back()->withErrors([
                    'servicio' => 'No se puede añadir un servicio siendo postpago.',
                ]);
            }
            // dd($update);
            
            
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
        return redirect('buscar-clientes');
    }
}
