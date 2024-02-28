<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\linea;
use App\Models\plane;
use App\Models\servicio;
use App\Models\contrato_plane;
use App\Models\operadore;
use App\Models\contrato_servicio;

class EstadisticasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lineas = linea::count();
        $activa = linea::where('estado_linea', "1")->count();
        $desactiva = linea::where('estado_linea', "0")->count();
        $prepagos = linea::where('pago', "prepago")->count();
        $postpagos = linea::where('pago', "postpago")->count();
        $prepago = round(($prepagos/$activa)*100);
        $postpago = round(($postpagos/$activa)*100);
        $gpr = round(($prepago*360)/100);
        $gpt = round(($postpago*360)/100);
        $planesUsados = contrato_plane::join('planes', 'contrato_planes.plan', '=', 'planes.id')
        ->where('contrato_planes.estado_plan', '1')
        ->select('planes.nombre', contrato_plane::raw('count(*) as total_usos'))
        ->groupBy('planes.nombre')->get();
        $serviciosUsados = contrato_servicio::join('servicios', 'contrato_servicios.servicio', '=', 'servicios.id')
        ->where('contrato_servicios.estado_servicio', '1')
        ->select('servicios.nombre', contrato_servicio::raw('count(*) as total_usos'))
        ->groupBy('servicios.nombre')->get();
        return view ('statistics', with([
            'activa' => $activa,
            'desactiva' => $desactiva,
            'prepago' => $prepago,
            'postpago' => $postpago,
            'gpr' => $gpr, 'gpt' => $gpt,
            'planes'=> $planesUsados, 'servicios'=> $serviciosUsados
        ])); 

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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
