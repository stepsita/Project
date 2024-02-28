<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\operadore;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


use Illuminate\Http\Request;

class RespuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function respuesta(Request $request)
    { 
        $request->validate ([
            'email'=> ['required', 'email'],
            'respuesta'=> ['required', 'string'],
        ]);
        // $validate=User::whereEmail($request->email)->first()->estado_user;
        // if ($validate == '0'){
        //     Auth::logout();
        //     return redirect()->route('iniciar-sesion');
        // }
        if (User::whereEmail($request->email)->exists()) {
            $user=User::whereEmail($request->email)->first();
        } else {
            return back()->withErrors([
                'email' => 'No se encontró un usuario con ese correo electrónico.',
            ]);
        }
        if ($user->estado_user=='0') {
            return back()->withErrors([
                'email' => 'Las credenciales no coinciden.',
            ]);
        }
        if (!$user || $user->respuesta != $request->respuesta) {
            // Mostrar mensaje de error
            return back()->withErrors([
                'respuesta' => 'Las credenciales no coinciden.',
            ]);
        }
        if ($user->respuesta==$request->respuesta){
            return view ('password-change',with([
                'datos' => $user
            ])); 
        }
        //dd($user->respuesta);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $email)
    {
        $operador = operadore::where('email', $email)->firstOrFail();
        $user = User::where('email', $email)->firstOrFail();
        $update = $request->except('_token', '_method');
        $cambio = [
            'password' => Hash::make($update['password'])
        ];
        $operador->update($cambio);
        $user->update($cambio);
        return redirect('iniciar-sesion');
    }
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
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
