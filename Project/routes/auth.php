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

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PlaneController;
use App\Http\Controllers\ServicioController;




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
        return view('home');
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

    Route::get('/crear-servicios', function () {
        return view('form-servicios');
    })->name('crear-servicios'); 
    Route::post('/crear-servicios', [ServicioController::class, 'store'])->name('crear-servicios');

    Route::get('/estadisticas', function () {
        return view('statistics');
    })->name('estadisticas'); 

    Route::get('form-planes-change', function () {
        return view('form-planes-change');
    });

    Route::get('/crear-clientes', function () {
        $planes=plane::all();
        return view('form-customer-add',['planes' => $planes]);
    })->name('crear-clientes'); 
    Route::post('/crear-clientes', [ClienteController::class, 'store'])->name('crear-clientes');

    Route::get('/buscar-clientes', function () {
        $datos_clientes=cliente::all();
        $datos_lineas=linea::all();
        return view('find-customer',['datos_clientes' => $datos_clientes, 'datos_lineas' => $datos_lineas]);
    })->name('buscar-clientes');    


    /*
    
    
    Route::get('form-servicios-change', function () {
        return view('form-servicios-change');
    });

*/

 
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
        $datos_operadores= User::where('tipo_user',1)->get();
        return view('find-worker',['datos_operadores' => $datos_operadores]);
    
    })->name('buscar-operador');

    Route::get('/operador/{id}', [RegisteredUserController::class, 'show']);

    

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
