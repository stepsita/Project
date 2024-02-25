@extends('layouts.layout')
@section('header-i')
@endsection

@section('content')
<section class="flex">
    <section style="height:80vh;" class="container-card-pys">
        <div class="container-columnas">
        
            <div class="col3">
                <h2 class="titulo-v">Operador</h2>
                <hr class="featurette-divider-mp">
                <h2 style="margin-left:1.5%;" class="titulo2">Datos personales</h2>
                <div class="datos">

                    <div class="contenedor-user">
                        <div class="flex-item">
                            <label class="label-p" for="name">Nombre</label>
                            <input class="pys" type="text" readonly onmousedown="return false;" placeholder="Ingrese el nombre"  style="padding-left:10px; padding-right: 10px;" value="{{$operador1['nombre'];}}">
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Apellido</label>
                            <input class="pys" type="text" readonly onmousedown="return false;" placeholder="Ingrese el apellido" style="padding-left:10px; padding-right: 10px;" value="{{$operador1['apellido'];}}">
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Fecha de nacimiento</label>
                            <input class="pys" type="text" readonly onmousedown="return false;" placeholder="Ingrese la fecha"  style="padding-left:10px; padding-right: 10px;" value="{{$operador1['fecha_nac'];}}">
                        </div>
                    </div>
                    
                    <div class="contenedor-user">
                        <div class="flex-item">
                            <label class="label-p" for="name">Cedula de identidad</label>
                            <input class="pys" type="number" readonly onmousedown="return false;" placeholder="Ingrese la cedula" style="padding-left:10px; padding-right: 10px;" value="{{$operador1['cedula'];}}">
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Estado</label>
                            <input class="pys" type="text" readonly onmousedown="return false;" placeholder="Ingrese la cedula"  style="padding-left:10px; padding-right: 10px;" value="{{$operador1['estado'];}}">
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="codigo">Correo</label>
                            <input class="pys" type="text" readonly onmousedown="return false;" placeholder="Correo"  style="padding-left:10px; padding-right: 10px;" value="{{$operador1['email'];}}">
                        </div>
                    </div>    
                    <div class="contenedor-user">
                        <div class="flex-item">
                            <label class="label-p" for="name">Pregunta de seguridad</label>
                            
                                <h2 style="font-size: 15px; color: rgb(5, 103, 70); margin-top: 1%;">¿Cúal es el nombre completo de tu mamá?</h2>
                            
                            <input  style="width: 550px;" class="pys" type="text" readonly onmousedown="return false;" placeholder="Ingrese la respuesta" style="padding-left:10px; padding-right: 10px;" value="{{$operador1['respuesta'];}}">
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </section><br>
</section>
@endsection