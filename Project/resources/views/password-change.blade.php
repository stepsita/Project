@extends('layouts.layout')
@section('sidebar')
@endsection
@section('header')
@endsection

@section('content')
<!--Servicios-->
<br>    
    <section class="flex">
         <div class="container-form" id="container-pregunta" style="height: 40vh;" >
             <header>Recupera tu contraseña</header>
             <form action="{{ route('respuesta') }}" method="post">
                @csrf
                     <div class="details personal" >
                         <span class="title">Recuperar contraseña</span>
                        <?php
                            $comb = "abc0123456789";
                            $shfl = str_shuffle($comb);
                            $pwd = substr($shfl,0,4);
                        ?>
                         <div class="fields" >
                                <label for="">Clave asignada</label>
                                <h2><?php echo $pwd;?></h2>
                                <input type="hidden" name='password' value="{{$pwd}}" required>
                         </div>
                         <br>
                         <div style=" display:flex; align-items: center; justify-content: center; height: 5vh; background-color: coral;">                           
                                <button type="submit" style="margin-top: 13px;" class="boton-i" >
                                    Aceptar
                                </button>
                         </div>
                        </form>
                    </div>      
         </div>
    </section>
@endsection