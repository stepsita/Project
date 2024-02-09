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
       /* 
        $request->validate([
            'nombre'=> ['required', 'string'],
            'apellido'=> ['required', 'string'],
            'fecha_nac'=> ['required', 'date'],
            'cedula'=> ['required', 'string', 'unique:users', 'max:8','min:8'],
            'clave'=> ['required', 'string','max:10','unique:users'],
            'estado'=> ['required', 'string'],
            'municipio'=> ['required', 'string'],
            'respuesta'=> ['required', 'string'],
            'tipo_user'=> ['required', 'string'],
            'email' => ['required', 'string', 'email','unique:users'],
            'password' => ['required', 'string','unique:users'],
        ]);*/

        $user = User::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'fecha_nac' => $request->fecha_nac,
            'cedula' => $request->cedula,
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
    public function show($id)
    {
        if(Auth::user() && Auth::user()->tipo_user!=2){
            return redirect('home');
        }
        $data['operador1'] = User::find($id);
        return view ('porfile-worker', $data);
    }
}
