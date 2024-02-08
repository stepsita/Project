<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;





class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['datos_operadores']=user::get();
        return view ('find-worker', $data);
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
            'cedula'=> ['required', 'string', 'unique:users', 'max:8'],
            'usuario'=> ['required', 'string', 'unique:users'],
            'clave'=> ['required', 'string','unique:users'],
            'estado'=> ['required', 'string'],
            'municipio'=> ['required', 'string'],
            'respuesta'=> ['required', 'string'],
            'tipo_user'=> ['required', 'string'],
        ]);
        //agregar informacion a la base de datos
        user::create([
            'nombre'=> $request['nombre'],
            'apellido'=> $request['apellido'],
            'fecha_nac'=> $request['fecha_nac'],
            'cedula'=> $request['cedula'],
            'usuario'=> $request['usuario'],
            'clave'=> $request['clave'],
            'estado'=> $request['estado'],
            'municipio'=> $request['municipio'],
            'respuesta'=> $request['respuesta'],
            'tipo_user'=> $request['tipo_user'],
        ]);
        $data['datos_operadores']=user::get();
        return view ('find-worker', $data);

    }

    public function login($request)
    {
       $userInfo = user::where('usuario', $request['usuario'])->first();

       if($userInfo) {
        if(strcmp($request['clave'], $userInfo->clave) == 0 ) {
            return Redirect::to('home')->with( ['userInfo' => $userInfo] );
        }
       }

    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data['operador1'] = user::find($id);
        return view ('porfile-worker', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(user $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, user $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user $user)
    {
        //
    }
}
