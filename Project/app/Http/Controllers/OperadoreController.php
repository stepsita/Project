<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\operadore;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class OperadoreController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        if(Auth::user() && Auth::user()->tipo_user!=2){
            return redirect('home');
        }
        $data['operador1'] = operadore::find($id);
        return view ('porfile-worker', $data);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        if(Auth::user() && Auth::user()->tipo_user!=2){
            return redirect('home');
        }
        $data['operador'] = operadore::find($id);
        return view ('change-porfile-worker', $data);
    }

    /**
     * Update the specified resource in storage.
     */
   /* public function update(Request $request, $email)
    {
       $datos_operadores= operadore::where("email", $email)->get();   
       if ($datos_operadores['cedula']!=$request['cedula'] or $datos_operadores['email']!=$request['email']){
            $request->validate([
                'cedula'=> ['required', 'string', 'unique:operadores', 'max:8','min:8'],
                'email' => ['required','email','unique:operadores']
            ]);
        }
        $update=$request->except('_token','_method');
        operadore::where("email", $email)->update($update);
        //$datos= User::where("email",$email)->get(); 
       // User::where("email", $email)->update($update);
       // if 

        //return $update;
        return redirect('buscar-operador');
    }*/
    public function update(Request $request, $email)
    {
        $operador = operadore::where('email', $email)->firstOrFail();
        $user = User::where('email', $email)->firstOrFail();
        if ($operador->email != $request->email) {
            $request->validate([
                'email' => ['required', 'email', 'unique:operadores']
            ]);
        }elseif ($operador->cedula != $request->cedula){
            $request->validate([
                'cedula' => ['required', 'string', 'unique:operadores', 'max:8', 'min:8']
            ]);
        }
        
        $update = $request->except('_token', '_method');
        $operador->update($update);
        $user->update($update);
        return redirect('buscar-operador');
    }
    
    public function updateDelete( $id)
    {
        operadore::where("id", $id)->update(['estado_user'=>0]);
        $operador = operadore::where("id", $id)->firstOrFail();
        User::where("email", $operador['email'])->update(['estado_user'=>0]);
        //return $update;
        return redirect('buscar-operador');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(operadore $operadore)
    {
        //
    }
}
