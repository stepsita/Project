<?php

namespace App\Http\Controllers;

use App\Models\plane;
use App\Models\servicio;
use Illuminate\Http\Request;

class PlaneController extends Controller
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
        return view ('form-planes');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate ([
            'nombre'=> ['required', 'string','unique:planes'],
            'precio'=> ['required', 'integer', 'max:100'],
            'min'=> ['required', 'integer', 'max:10000'],
            'sms'=> ['required', 'integer', 'max:10000'],
            'gb'=> ['required', 'integer', 'max:100'], 
            'estado'=> ['required', 'integer'],
        ]);
        //agregar informacion a la base de datos
        plane::create([
            'nombre'=> $request['nombre'],
            'precio'=> $request['precio'],
            'min'=> $request['min'],
            'sms'=> $request['sms'],
            'gb'=> $request['gb'],
            'estado'=> $request['estado'],
        ]);
        return redirect('catalogo');
    }

    /**
     * Display the specified resource.
     */
    public function show(plane $plane)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['plan'] = plane::find($id);
        return view ('form-planes-change', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $update=$request->except('_token','_method');
        plane::where("id", $id)->update($update);
        //return $update;
        return redirect('catalogo');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(plane $plane)
    {
        //
    }
}
