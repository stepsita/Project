@extends('layouts.layout')
@section('sidebar')
@endsection
@section('header')
@endsection

@section('content')
<!--Servicios-->
<br>    
    <section class="flex" style="height: 70vh;">
        <form action="{{ route('respuesta') }}" method="post"> 
        <div class="container-form" id="container-pregunta">
           
             <header>Recupera tu contraseña</header>
                @csrf
                <br>
                <div class="details personal" >
                    <span class="title">¿Cúal es el nombre completo de tu mamá?</span>
                    <div class="fields" >
                        <div class="input-fields">
                            <label for="">Correo</label>
                            <input type="text" name="email" id="agrandar-input" placeholder="Escribe la respuesta" value="{{ old('email')}}" required>
                            @if ($errors->has('email'))
                                <small style="color: red">{{ $errors->first('email') }}</small>
                            @endif
                        </div>   
                        <div class="input-fields">
                            <label for="">Respuesta</label>
                            <input type="text" name="respuesta" id="agrandar-input" placeholder="Escribe la respuesta" value="{{ old('respuesta')}}" required>
                            @if ($errors->has('respuesta'))
                                <small style="color: red">{{ $errors->first('respuesta') }}</small>
                            @endif
                        </div>                 
                    </div>
                    <div style=" display:flex; align-items: center; justify-content: center;">                           
                        <button type="submit" style="margin-top: 13px;" class="boton-i" > Enviar </button>
                    </div>   
                </div>      
           
         </div>
        </form>
    </section>
@endsection