@extends('layouts.layout')
@section('sidebar')
@endsection
@section('header')
@endsection

@section('content')
<!--Servicios-->
<br>    
    <section class="flex">
         <div class="container-form" id="container-pregunta" >
             <header>Recupera tu contraseña</header>
             <form action="{{ route('respuesta') }}" method="post">
                @csrf
                     <div class="details personal">
                         <span class="title">Recuperar contraseña</span>
                     
                         <div class="fields" >
                            <div class="input-fields">
                                <label for="">Contraseña</label>
                                <input type="text" name="password" id="agrandar-input" placeholder="Escribe tu contraseña" required>
                            </div>                        
                         </div>
                         <div style=" display:flex; align-items: center; justify-content: center;";>                           
                                <button type="submit" style="margin-top: 13px;" class="boton-i" >
                                        Enviar
                                </button>
                         </div>
                 </div>      
             </form>
         </div>
    </section>
@endsection