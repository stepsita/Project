@extends('layouts.layout')
@section('header-i')
@endsection

@section('content')
<!--Servicios-->
<br>
    <div style="margin-left: 390px;" class="container-form" id="container-servicios" >
        <header style=" margin-left: -5%;">Servicios</header>
    <form action="{{ url('/actualizar-servicio', $servicio['id'])}}" method="POST">
        @csrf
         @method('PATCH')
        <div class="form firts" style=" margin-left: -5%;"> 
            <div class="details personal">
                <span class="title"> Detalles del servicio</span>
            
                <div class="fields" >
                    <div class="input-fields">
                        <label for="">Nombre</label>
                        <input type="text" placeholder="Nombre" name='nombre' value="{{$servicio['nombre']}}" required>
                    </div>
                    <div class="input-fields">
                        <label for="">Precio</label>
                        <input type="number" placeholder="Precio"  name='precio' value="{{$servicio['precio']}}"required>
                        @error('precio')
                            <small style="color: red">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="fields" >
                    <div class="input-fields" >
                        <div style="flex-direction: row;">
                            <label for="" style="margin-right: 58px;">Tipo</label>
                            <label for="">Cantidad</label>
                        </div>
                        
                        <div style="flex-direction: row; width: 70%;">
                            <select name="tipo" value="{{$servicio['tipo']}}" required id="#style-exception" style="width: 80px;">
                                <option @if($servicio['tipo']=="min") selected @endif value="min">MIN</option>
                                <option @if($servicio['tipo']=="sms") selected @endif value="sms">SMS</option>
                                <option @if($servicio['tipo']=="gb") selected @endif value="gb">GB</option>
                            </select>
                            
                            <input type="number" placeholder="Cantidad" name='cantidad' value="{{$servicio['cantidad']}}" required style="width: 55%;">
                            @error('cantidad')
                                <small style="color: red">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="cont-botton" style="align-items: center; justify-content: center;">
                    <button class="next" type=submit>
                        <span class="btnText" style="font-size: 0.96em;">Actualizar</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div> 
            </div>
        </div>      
    </form>
    </div>
@endsection