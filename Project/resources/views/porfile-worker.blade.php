@extends('layouts.layout')


@section('content')
<section class="container-card-usu">
        <div class="container-columnas">
        
            <div class="col3">
                <h2 class="titulo-v">Operador</h2>
                <hr class="featurette-divider-mp">
                <h2 class="titulo2">Datos personales</h2>
                <div class="datos">

                    <div class="contenedor-user">
                        <div class="flex-item">
                            <label class="label-p" for="name">Nombre</label>
                            <input class="pys" type="text" placeholder="Ingrese el nombre"  style="padding-left:10px; padding-right: 10px;" value="Andres">
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Apellido</label>
                            <input class="pys" type="text" placeholder="Ingrese el apellido" style="padding-left:10px; padding-right: 10px;" value="Franco">
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Fecha de nacimiento</label>
                            <input class="pys" type="text" placeholder="Ingrese la fecha"  style="padding-left:10px; padding-right: 10px;" value="13/09/2006">
                        </div>
                    </div>
                    
                    <div class="contenedor-user">
                        <div class="flex-item">
                            <label class="label-p" for="name">Cedula de identidad</label>
                            <input class="pys" type="number" placeholder="Ingrese la cedula" style="padding-left:10px; padding-right: 10px;" value="31777346">
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Estado</label>
                            <input class="pys" type="text" placeholder="Ingrese la cedula"  style="padding-left:10px; padding-right: 10px;" value="Caracas">
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Ciudad</label>
                            <input  class="pys" type="text" placeholder="Ingrese la urbanización" style="padding-left:10px; padding-right: 10px;" value="Libertador">
                        </div>
                    </div>
                    <div class="contenedor-user">
                        <div class="flex-item">
                            <label class="label-p" for="name">Pregunta de seguridad</label>
                            
                                <h2 style="font-size: 15px; color: rgb(5, 103, 70); margin-top: 1%;">¿Cúal es el nombre completo de tu mamá?</h2>
                            
                            <input  style="width: 550px;" class="pys" type="text" placeholder="Ingrese la respuesta" style="padding-left:10px; padding-right: 10px;" value="Rosa valentina swan">
                        </div>
                    </div>
                </div>

                <h2 class="titulo2">Datos de ingreso al sistema</h2>
                <div class="contenedor-op">
                    <div class="flex-item">
                        <label class="label-p" for="codigo">Usuario</label>
                        <input class="pys" type="text" placeholder="Usuario"  style="padding-left:10px; padding-right: 10px;" value="AF1309">
                    </div>
                    <div class="flex-item">
                        <label class="label-p" for="numero">Clave asignada</label>
                        <input class="pys" type="text" placeholder="Contraseña" style="padding-left:10px; padding-right: 10px;" value="4630501">
                    </div>
                </div>    
            </div>
        </div>
    </section><br>
@endsection