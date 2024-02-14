@extends('layouts.layout')
@section('header-i')
@endsection

@section('content')
<section class="flex">
    <section style="margin-left: 4%;" class="container-card-ope">
        <div class="container-columnas">
            <div class="col3">
                <h2 class="titulo-v">Operador</h2>
                <hr class="featurette-divider-mp">
                <h2 style="margin-left: 1%; margin-bottom:0.5%;" class="titulo2">Datos personales</h2>
                <div class="datos">
                <form action="{{ route('actualizar-operador',$operador) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="contenedor-user">
                        <div class="flex-item">
                            <label class="label-p" for="name">Nombre</label>
                            <input class="pys" type="text" placeholder="Ingrese el nombre"  style="padding-left:10px; padding-right: 10px;" value="{{$operador['nombre']}}">
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Apellido</label>
                            <input class="pys" type="text" placeholder="Ingrese el apellido" style="padding-left:10px; padding-right: 10px;" value="{{$operador['apellido']}}">
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Fecha de nacimiento</label>
                            <input class="pys" type="text" placeholder="Ingrese la fecha"  style="padding-left:10px; padding-right: 10px;" value="{{$operador['fecha_nac']}}">
                        </div>
                    </div>
                    
                    <div class="contenedor-user">
                        <div class="flex-item">
                            <label class="label-p" for="name">Cedula de identidad</label>
                            <input class="pys" type="number" placeholder="Ingrese la cedula" style="padding-left:10px; padding-right: 10px;" value="{{$operador['cedula']}}">
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Estado</label>
                            <input class="pys" type="text" placeholder="Ingrese la cedula"  style="padding-left:10px; padding-right: 10px;" value="{{$operador['estado']}}">
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Municipio</label>
                            <input  class="pys" type="text" placeholder="Ingrese la urbanización" style="padding-left:10px; padding-right: 10px;" value="{{$operador['municipio']}}">
                        </div>
                    </div>
                    <div class="contenedor-user">
                        <div class="flex-item">
                            <label class="label-p" for="name">Pregunta de seguridad</label>
                                <h2 style="font-size: 15px; color: rgb(5, 103, 70); margin-top: 1%;">¿Cúal es el nombre completo de tu mamá?</h2>
                                <input  style="width: 550px;" class="pys" type="text" placeholder="Ingrese la respuesta" style="padding-left:10px; padding-right: 10px;" value="{{$operador['respuesta']}}">
                            </div>   
                        </div>
                        <h2 style="margin-left: 1%; margin-bottom:0.5%;" class="titulo2">Datos de ingreso al sistema</h2>
                        <div class="contenedor-op">
                            <div class="flex-item">
                                <label class="label-p" for="codigo">Correo</label>
                                <input class="pys" type="email"  placeholder="Correo"  style="padding-left:10px; padding-right: 10px;" value="{{$operador['email']}}">
                            </div>
                            <div class="flex-item">
                                <label class="label-p" for="numero">Clave asignada</label>
                                <input class="pys" type="text" placeholder="Contraseña" style="padding-left:10px; padding-right: 10px;" value="{{$operador['password']}}">
                            </div>
                        </div>
                    </div>
                    <div class="cont-botton" style="align-items: center; justify-content: center;">
                        <button type="submit" class="cambiar" class="input-mp">Guardar cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </section><br><br>
</section>
@endsection