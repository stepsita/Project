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
                <h2 style="margin-left: 1%; margin-bottom:-0.5%" class="titulo2">Planes y Servicios adquiridos</h2>
                @foreach($datos as $dat)
                <div class="datos" >
                    <div class="contenedor-user">
                        <div class="flex-item">
                            <label class="label-p" for="name">Nombre</label>
                            <input class="pys" type="text" value="{{$dat['nombre']}}" name='nombre' style="padding-left:10px; padding-right: 10px;" readonly onmousedown="return false;" >
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Apellido</label>
                            <input class="pys" type="text" value="{{$dat['apellido']}}" name='apellido' style="padding-left:10px; padding-right: 10px;" readonly onmousedown="return false;" >
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Cedula de identidad</label>
                            <input class="pys" type="number" value="{{$dat['cedula']}}" name='cedula' style="padding-left:10px; padding-right: 10px;" readonly onmousedown="return false;" >
                        </div>
                        
                    </div>
                    
                    <div class="contenedor-user">
                        <div class="flex-item">
                            <label class="label-p" for="name">Fecha de nacimiento</label>
                            <input class="pys" type="text" value="{{$dat['fecha_nac']}}" name='fecha_nac' style="padding-left:10px; padding-right: 10px;" readonly onmousedown="return false;" >
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Correo</label>
                            <input class="pys" type="email" value="{{$dat['correo']}} " style="padding-left:10px; padding-right: 10px;" readonly onmousedown="return false;" >
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Estado</label>
                            <input class="pys" type="text" value="{{$dat['estado']}}" style="padding-left:10px; padding-right: 10px;" readonly onmousedown="return false;" >
                        </div>
                        
                        
                    </div>

                    <div class="contenedor-user">
                        <div class="flex-item">
                            <label class="label-p" for="name">Ciudad</label>
                            <input class="pys" type="text" value="{{$dat['ciudad']}}" style="padding-left:10px; padding-right: 10px;" readonly onmousedown="return false;" >
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Municipio</label>
                            <input class="pys" type="text" value="{{$dat['municipio']}}" style="padding-left:10px; padding-right: 10px;" readonly onmousedown="return false;" >
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Calle</label>
                            <input class="pys" type="text" value="{{$dat['calle']}}" style="padding-left:10px; padding-right: 10px;" readonly onmousedown="return false;" >
                        </div>

                    </div>
                </div>

                <h2 style="margin-left: 1%; margin-bottom:-0.5%; margin-top:-2.5%;" class="titulo2">Datos de la línea</h2>
                <div class="contenedor-user">
                    <div class="flex-item">
                        <label class="label-p" for="codigo">Código</label>
                        <h2 style="outline: none; color:#179c2b; padding: 0 15px; height: 42px; width: 220px;margin: 8px 0; font-size: 20px; font-weight:600; font-weight: 400;"> 0411</h2>                    
                    </div>
                    <div class="flex-item">
                        <label class="label-p" for="numero">Número asignado</label>
                        <h2 style="outline: none; color:#179c2b; padding: 0 15px; height: 42px; width: 220px;margin: 8px 0; font-size: 20px; font-weight:600; font-weight: 400;">{{$dat['numero']}}</h2>                    
                    </div>
                    <div class="flex-item">
                        <label class="label-p" for="name">Método de Pago</label>
                        <input class="pys" type="text" value="{{$dat['pago']}}" style="padding-left:10px; padding-right: 10px;" readonly onmousedown="return false;" >
                    </div>
                </div>
            </div>
        </div>
    </section><br>
    
@if($dat['pago']=='prepago')
@if($dat['estado_plan']==1) 

    <section class="container-card-pys">
        <div class="col3">
            <h2 style="margin-left: 1%; margin-top:3%" class="titulo-v">Planes y servicios de la línea</h2>
            <hr class="featurette-divider-mp">
                <h2 style="margin-left: 1%; margin-bottom:-0.5%" class="titulo2">Plan adquirido</h2>
                <div class="contenedor-user">
                    <div class="flex-item">
                        <label class="label-p" for="name">Nombre</label>
                        <input class="pys" type="text" value="{{$dat['nombre_plan']}}" style="padding-left:10px; padding-right: 10px;" readonly onmousedown="return false;" >
                    </div>
                    <div class="flex-item">
                        <label class="label-p" for="name">Precio</label>
                        <input class="pys" type="text" value="{{$dat['precio_plan']}}" style="padding-left:10px; padding-right: 10px;" readonly onmousedown="return false;" >                
                    </div>
                    <div class="flex-item">
                        <label class="label-p" for="name">Min</label>
                        <input class="pys" value="{{$dat['min']}}" type="text" style="padding-left:10px; padding-right: 10px;" readonly onmousedown="return false;" >
                    </div>
                
                </div>
                <div class="contenedor-user">
                    <div class="flex-item">
                        <label class="label-p" for="name">SMS</label>
                        <input class="pys" type="text"  value="{{$dat['sms']}}" style="padding-left:10px; padding-right: 10px;" readonly onmousedown="return false;" >
                    </div>
                    <div class="flex-item">
                        <label class="label-p" for="name">GB</label>
                        <input class="pys" type="text"  value="{{$dat['gb']}}"  style="padding-left:10px; padding-right: 10px;" readonly onmousedown="return false;" >
                    </div>
                    <div class="flex-item">
                    </div>
                </div>
            @endif
       
        @if($dat['estado_servicio']==1) 
            <br>
            <h2 style="margin-left: 1%; margin-bottom:-0.5%; margin-top:-2.5%;" class="titulo2">Servicio adquirido</h2>
            <div class="contenedor-user">
                <div class="flex-item">
                    <label class="label-p" for="codigo">Nombre del servicio</label>
                    <input class="pys" type="text"  value="{{$dat['nombre_servicio']}}" style="padding-left:10px; padding-right: 10px;" readonly onmousedown="return false;" >
                </div>
                <div class="flex-item">
                    <label class="label-p" for="numero">Precio</label>
                    <input class="pys" type="text" value="{{$dat['precio_servicio']}}"  style="padding-left:10px; padding-right: 10px;" readonly onmousedown="return false;" >
                </div>
                <div class="flex-item">
                    <label class="label-p" for="estado">Tipo</label>
                    <input class="pys" type="text" value="{{$dat['tipo']}}"  style="padding-left:10px; padding-right: 10px;" readonly onmousedown="return false;" >
                </div>
                <div class="flex-item">
                    <label class="label-p" for="servicio">Cantidad</label>
                    <input class="pys" type="text" value="{{$dat['cantidad']}}"  style="padding-left:10px; padding-right: 10px;" readonly onmousedown="return false;" >
                </div>
            </div>
        
        @endif
    @endif
                @endforeach    
            </div>
            </div>
        </div>
    </div>
    </section><br><br>
</section>
@endsection