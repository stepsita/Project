<?php

namespace App\Http\Controllers;

use App\Models\servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
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
            'nombre'=> ['required', 'string','unique:servicios'],
            'tipo'=> ['required', 'string'],
            'descripcion'=> ['required', 'string'],
            'cantidad'=> ['required', 'integer', 'max:1000'],
            'precio'=> ['required', 'integer', 'max:100'],
        ]);
        //agregar informacion a la base de datos
        servicio::create([
            'nombre'=> $request['nombre'],
            'tipo'=> $request['tipo'],
            'descripcion'=> $request['descripcion'],
            'cantidad'=> $request['cantidad'],
            'precio'=> $request['precio'],
        ]);
        return view ('catalogue');
    }

    /**
     * Display the specified resource.
     */
    public function show(servicio $servicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(servicio $servicio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, servicio $servicio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(servicio $servicio)
    {
        //
    }
}
