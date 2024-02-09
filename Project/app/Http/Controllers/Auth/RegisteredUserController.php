<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
       /* $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);*/

        $user = User::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'fecha_nac' => $request->fecha_nac,
            'cedula' => $request->cedula,
            'usuario' => $request->usuario,
            'estado' => $request->estado,
            'municipio' => $request->municipio,
            'respuesta' => $request->respuesta,
            'tipo_user' => $request->tipo_user,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        //event(new Registered($user));

        //Auth::login($user);
        
        return redirect(RouteServiceProvider::HOME);
    }
    public function createUser(Request $request){
        
        /* $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);*/

        $user = User::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'fecha_nac' => $request->fecha_nac,
            'cedula' => $request->cedula,
            'usuario' => $request->usuario,
            'estado' => $request->estado,
            'municipio' => $request->municipio,
            'respuesta' => $request->respuesta,
            'tipo_user' => $request->tipo_user,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        //event(new Registered($user));

        //Auth::login($user);
        
        return redirect('buscar-operador');
    }
}
