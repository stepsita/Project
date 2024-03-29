<?php

namespace App\Http\Controllers;

use App\Models\servicio;
use App\Models\plane;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['datos_planes']=plane::get();
        $data['datos_servicios']=servicio::get();

        return view ('catalogue', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('form-servicios');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate ([
            'nombre'=> ['required', 'string','unique:servicios'],
            'tipo'=> ['required', 'string'],
            'cantidad'=> ['required', 'integer', 'max:10000'],
            'precio'=> ['required', 'integer', 'max:100'],
            'estado'=> ['required', 'integer',],
        ]);
        //agregar informacion a la base de datos
        servicio::create([
            'nombre'=> $request['nombre'],
            'tipo'=> $request['tipo'],
            'cantidad'=> $request['cantidad'],
            'precio'=> $request['precio'],
            'estado'=> $request['estado'],
        ]);
        return redirect('catalogo');
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
    public function edit($id)
    {
        $data['servicio'] = servicio::find($id);
        return view ('form-servicios-change', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $update=$request->except('_token','_method');
        servicio::where("id", $id)->update($update);
        //return $update;
        return redirect('catalogo');

    }
    public function updateDelete( $id)
    {
        servicio::where("id", $id)->update(['estado'=>0]);
        //return $update;
        return redirect('catalogo');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(servicio $servicio)
    {
        //
    }
}
