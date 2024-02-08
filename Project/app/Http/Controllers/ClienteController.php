<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use App\Models\linea;
use App\Models\plane;

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
       
        //agregar informacion a la base de datos
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
        linea::create([
            'cedula'=> $request['cedula'],
            'codigo'=> $request['codigo'],
            'numero'=> $request['numero'],
            'plan'=> $request['plan'],
            'pago'=> $request['pago'],
            'estado_linea'=> $request['estado_linea'],
            'fecha'=> $request['fecha'],
        ]);
        $data['datos_clientes']=cliente::get();
        $data['datos_linea']=linea::get();
        return view ('find-customer', $data);
    }

    /**
     * Display the specified resource.
     */
    public function show(cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cliente $cliente)
    {
        //
    }
}
