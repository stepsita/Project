<?php

namespace App\Http\Controllers;

use App\Models\linea;
use Illuminate\Http\Request;

class LineaController extends Controller
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
        linea::create([
            'cedula'=> $request['cedula'],
            'codigo'=> $request['codigo'],
            'numero'=> $request['numero'],
            'plan'=> $request['plan'],
            'pago'=> $request['pago'],
            'estado_linea'=> $request['estado_linea'],
            'fecha'=> $request['fecha'],
        ]);
      
        return redirect('buscar-clientes');
    }

    /**
     * Display the specified resource.
     */
    public function show(linea $linea)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(linea $linea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, linea $linea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(linea $linea)
    {
        //
    }
}
