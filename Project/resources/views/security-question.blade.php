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
             <form action="/home">
                     <div class="details personal">
                         <span class="title">¿Cúal es el nombre completo de tu mamá?</span>
                     
                         <div class="fields" >
                             <div class="input-fields">
                                 <label for="">Respuesta</label>
                                 <input type="text" id="agrandar-input" placeholder="Escribe la respuesta" required>
                             </div>                            
                         </div>
                         <div style=" display:flex; align-items: center; justify-content: center;";>                           
                                <button style="margin-top: 13px;" class="boton-i" >
                                        Enviar
                                </button>
                         </div>
                 </div>      
             </form>
         </div>
    </section>
@endsection