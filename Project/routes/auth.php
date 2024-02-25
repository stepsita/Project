<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\plane;
use App\Models\servicio;
use App\Models\linea;
use App\Models\cliente;
use App\Models\operadore;

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\LineaController;
use App\Http\Controllers\PlaneController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\OperadoreController;




Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');
    
});

Route::middleware('auth')->group(function () {

    Route::get('/home', function () {
        $user=User::whereEmail(Auth::user()->email)->first()->estado_user;
        //  dd($user);
        if ($user == '0'){
            // dd('Llegando');
            Auth::logout();
            return redirect()->route('iniciar-sesion');
            // return abort(401);
        }
        $operador = operadore::where('email', Auth::user()->email)->firstOrFail();
        return view('home', ['operador' => $operador]);

        
    })->name('home');

    Route::get('/catalogo', function () {
        $datos_planes=plane::all();
        $datos_servicios=servicio::all();
        return view('catalogue',['datos_planes' => $datos_planes, 'datos_servicios' => $datos_servicios]);
    })->name('catalogo');

    Route::get('/crear-planes', function () {
        return view('form-planes');
    })->name('crear-planes'); 
    Route::post('/crear-planes', [PlaneController::class, 'store'])->name('crear-planes');
    Route::get('/editar-plan/{id}/edit', [PlaneController::class, 'edit']);
    Route::patch('/actualizar-plan/{plan}', [PlaneController::class, 'update'])->name('actualizar-plan');
    Route::get('/eliminar-plan/{id}', [PlaneController::class, 'updateDelete']);


    Route::get('/crear-servicios', function () {
        return view('form-servicios');
    })->name('crear-servicios'); 
    Route::post('/crear-servicios', [ServicioController::class, 'store'])->name('crear-servicios');
    Route::get('/editar-servicio/{id}/edit', [ServicioController::class, 'edit']);
    Route::patch('/actualizar-servicio/{servicio}', [ServicioController::class, 'update'])->name('actualizar-servicio');
    Route::get('/eliminar-servicio/{id}', [ServicioController::class, 'updateDelete']);


    Route::get('/estadisticas', function () {
        return view('statistics');
    })->name('estadisticas');  


    Route::get('/crear-clientes', function () {
        $planes=plane::all();
        $operador = operadore::where('email', Auth::user()->email)->firstOrFail();
        return view('form-customer-add',['planes' => $planes, 'operador' => $operador]);
    })->name('crear-clientes'); 
    Route::post('/crear-clientes', [ClienteController::class, 'store'])->name('crear-clientes');
    Route::get('/buscar-clientes', function () {
        $datos_clientes=cliente::join('lineas', 'clientes.cedula', '=', 'lineas.cedula')->get();
        return view('find-customer',['datos_clientes' => $datos_clientes]);
    })->name('buscar-clientes');  

    Route::get('/añadir-linea/{id}', function ($id) {
        $planes=plane::all();
        $servicios=servicio::all();
        $operador = operadore::where('email', Auth::user()->email)->firstOrFail();
        return view('addline-customer',['planes' => $planes, 'servicios' => $servicios, 'cedula'=> $id,'operador' => $operador]);
    })->name('/añadir-linea'); 
    Route::post('/añadir-linea', [LineaController::class, 'store'])->name('añadir-linea');
    Route::get('/linea/{id}', [ClienteController::class, 'show']);
    Route::get('/editar-linea/{id}/edit', [ClienteController::class, 'edit']);
    Route::patch('/actualizar-linea/{linea}', [ClienteController::class, 'update'])->name('actualizar-linea');
    Route::get('/eliminar-linea/{linea}', [ClienteController::class, 'updateDelete']);



    /*
       Route::get('form-planes-change', function () {
        return view('form-planes-change');
    }); 
    Route::get('form-servicios-change', function () {
        return view('form-servicios-change');
    });
*/
 //admin
 Route::get('/crear-operador', function () {
    if(Auth::user() && Auth::user()->tipo_user!=2){
        return redirect('home');
    }
    return view('form-worker-add');
})->name('crear-operador');
Route::post('/crear-operador', [RegisteredUserController::class, 'createUser'])->name('crear-operador');

Route::get('/buscar-operador', function () {
    if(Auth::user() && Auth::user()->tipo_user!=2){
        return redirect('home');
    }
    $datos_operadores= operadore::where('tipo_user',1)->where('estado_user',1)->get();
    return view('find-worker',['datos_operadores' => $datos_operadores]);
})->name('buscar-operador');

    Route::get('/operador/{id}', [OperadoreController::class, 'show']);
    Route::get('/editar-operador/{id}/edit', [OperadoreController::class, 'edit']);
    Route::patch('/actualizar-operador/{operador}', [OperadoreController::class, 'update'])->name('actualizar-operador');
    Route::get('/eliminar-operador/{operador}', [OperadoreController::class, 'updateDelete']);


    

    Route::get('verify-email', EmailVerificationPromptController::class)
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});

