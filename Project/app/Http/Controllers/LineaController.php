<?php

namespace App\Http\Controllers;

use App\Models\linea;
use App\Models\contrato_plane;
use App\Models\contrato_servicio;

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
            if (!empty($request['servicio'])) {
                contrato_servicio::create([
                    'operador'=> $request['operador'],
                    'servicio'=> $request['servicio'],
                    'estado_servicio'=>'1',
                    'linea'=> $linea['id']
                ]);
            }   
        }
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
