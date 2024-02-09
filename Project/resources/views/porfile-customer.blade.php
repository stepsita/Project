@extends('layouts.layout')
@section('header-i')
@endsection

@section('content')
<section class="flex">
    <section class="container-card-pys">
        <div class="container-columnas">
        
            <div class="col3">
                <h2 class="titulo-v">Visualizar</h2>
                <hr class="featurette-divider-mp">
                <h2 style="margin-left: 1%; margin-bottom:-0.5%" class="titulo2">Datos personales</h2>

                <div class="datos" >
                    <div class="contenedor-user">
                        <div class="flex-item">
                            <label class="label-p" for="name">Nombre</label>
                            <input class="pys" type="text" name='nombre' style="padding-left:10px; padding-right: 10px;" readonly onmousedown="return false;" >
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Apellido</label>
                            <input class="pys" type="text" name='apellido' style="padding-left:10px; padding-right: 10px;" readonly onmousedown="return false;" >
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Fecha de nacimiento</label>
                            <input class="pys" type="text" name='fecha_nac' style="padding-left:10px; padding-right: 10px;" readonly onmousedown="return false;" >
                        </div>
                    </div>
                    
                    <div class="contenedor-user">
                        <div class="flex-item">
                            <label class="label-p" for="name">Cedula de identidad</label>
                            <input class="pys" type="number" ame='cedula' style="padding-left:10px; padding-right: 10px;" readonly onmousedown="return false;" >
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Ciudad</label>
                            <input class="pys" type="text" style="padding-left:10px; padding-right: 10px;" readonly onmousedown="return false;" >
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Correo</label>
                            <input class="pys" type="mail" style="padding-left:10px; padding-right: 10px;" readonly onmousedown="return false;" >
                        </div>
                    </div>

                    <div class="contenedor-user">
                        <div class="flex-item">
                            <label class="label-p" for="name">Codigo postal</label>
                            <input class="pys" type="number" style="padding-left:10px; padding-right: 10px;" readonly onmousedown="return false;" >
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Calle</label>
                            <input class="pys" type="text" style="padding-left:10px; padding-right: 10px;" readonly onmousedown="return false;" >
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Casa/apartamento</label>
                            <input class="pys" type="text" style="padding-left:10px; padding-right: 10px;" readonly onmousedown="return false;" >
                        </div>
                    </div>
                </div>

                <h2 style="margin-left: 1%; margin-bottom:-0.5%; margin-top:-2.5%;" class="titulo2">Datos de la línea</h2>
                <div class="contenedor-user">
                    <div class="flex-item">
                        <label class="label-p" for="codigo">Código</label>
                        <input class="pys" type="number" style="padding-left:10px; padding-right: 10px;" readonly onmousedown="return false;" >
                    </div>
                    <div class="flex-item">
                        <label class="label-p" for="numero">Número asignado</label>
                        <input class="pys" type="text" style="padding-left:10px; padding-right: 10px;" readonly onmousedown="return false;" >
                    </div>
                    <div class="flex-item">
                        <label class="label-p" for="estado">Estado</label>
                        <input class="pys" type="text"  style="padding-left:10px; padding-right: 10px;" readonly onmousedown="return false;" >
                    </div>
                </div>
            </div>
        </div>
    </section><br>

    
    <section class="container-card-pys">
            <div class="col3">
                <h2 style="margin-left: 1%; margin-top:3%" class="titulo-v">Planes y servicios de la línea</h2>
                <hr class="featurette-divider-mp">
                
                <h2 style="margin-left: 1%; margin-bottom:-0.5%" class="titulo2">Plan adquirido</h2>

                <div class="datos">
                    <div class="contenedor-user">
                        <div class="flex-item">
                            <label class="label-p" for="name">Nombre del plan</label>
                            <input class="pys" type="text"  style="padding-left:10px; padding-right: 10px;" readonly onmousedown="return false;" >
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Precio</label>
                            <input class="pys" type="text" style="padding-left:10px; padding-right: 10px;" readonly onmousedown="return false;" >
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Descripción</label>
                            <input class="pys" type="text" style="padding-left:10px; padding-right: 10px;" readonly onmousedown="return false;" >
                        </div>
                    </div>
                    
                    <div class="contenedor-user">
                        <div class="flex-item">
                            <label class="label-p" for="name">Min</label>
                            <input class="pys" type="number" style="padding-left:10px; padding-right: 10px;" readonly onmousedown="return false;" >
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">SMS</label>
                            <input class="pys" type="text"  style="padding-left:10px; padding-right: 10px;" readonly onmousedown="return false;" >
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">GB</label>
                            <input class="pys" type="text"  style="padding-left:10px; padding-right: 10px;" readonly onmousedown="return false;" >
                        </div>
                    </div>

                </div>

                    <h2 style="margin-left: 1%; margin-bottom:-0.5%; margin-top:-2.5%;" class="titulo2">Servicio adquirido</h2>
                    <div class="contenedor-user">
                        <div class="flex-item">
                            <label class="label-p" for="estado">Estado</label>
                            <input class="pys" type="text" style="padding-left:10px; padding-right: 10px;" readonly onmousedown="return false;" >
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="codigo">Nombre del servicio</label>
                            <input class="pys" type="text"  style="padding-left:10px; padding-right: 10px;" readonly onmousedown="return false;" >
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="numero">Precio</label>
                            <input class="pys" type="text" style="padding-left:10px; padding-right: 10px;" readonly onmousedown="return false;" >
                        </div>
                        
                    </div>
                    
                    <div class="contenedor-user">
                        <div class="flex-item">
                            <label class="label-p" for="servicio">Cantidad</label>
                            <input class="pys" type="text" style="padding-left:10px; padding-right: 10px;" readonly onmousedown="return false;" >
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="tipo" style="margin-left:-170px;">Descripción</label>
                            <input class="pys" type="text" style="margin-left:-170px;" readonly onmousedown="return false;" >
                        </div>
                    </div>
            </div>
        </div>
    </section><br><br>
</section>
@endsection