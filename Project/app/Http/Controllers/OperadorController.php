<?php

namespace App\Http\Controllers;

use App\Models\operador;
use Illuminate\Http\Request;

class OperadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
            'cedula'=> ['required', 'string', 'unique:operadors', 'max:8'],
            'usuario'=> ['required', 'string', 'unique:operadors'],
            'clave'=> ['required', 'string','unique:operadors'],
            'estado'=> ['required', 'string'],
            'municipio'=> ['required', 'string'],
            'respuesta'=> ['required', 'string'],
        ]);
        //agregar informacion a la base de datos
        operador::create([
            'nombre'=> $request['nombre'],
            'apellido'=> $request['apellido'],
            'fecha_nac'=> $request['fecha_nac'],
            'cedula'=> $request['cedula'],
            'usuario'=> $request['usuario'],
            'clave'=> $request['clave'],
            'estado'=> $request['estado'],
            'municipio'=> $request['municipio'],
            'respuesta'=> $request['respuesta'],
        ]);
        return view ('find-worker');
    }

    /**
     * Display the specified resource.
     */
    public function show(operador $operador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(operador $operador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, operador $operador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(operador $operador)
    {
        //
    }
}
