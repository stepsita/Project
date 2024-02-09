@extends('layouts.layout')
@section('header-i')
@endsection

@section('content')
    <section style="margin-top: 5%; margin-left:2%;" class="flex">
        <div  class="container-form" id="container-planes">
                <header>Planes</header>
                <form action="{{ route('crear-planes') }}" method="POST">
                    @csrf
                    <div class="form firts" > <!--Primer form-->
                        <div class="details personal" >
                            <span class="title"> Detalles del plan</span>
                        
                            <div class="fields">
                                <div class="input-fields">
                                    <label for="">Nombre</label>
                                    <input type="text" placeholder="Nombre" name='nombre' value="{{ old('nombre')}}" required>
                                    @error('nombre')
                                        <small style="color: red">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="input-fields">
                                    <label for="">Precio</label>
                                    <input type="number" placeholder="Precio" name='precio' value="{{ old('precio')}}" required>
                                    @error('precio')
                                        <small style="color: red">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="input-fields">
                                    <label for="">MIN</label>
                                    <input type="number" placeholder="Minutos en llamada" name='min' value="{{ old('min')}}" required>
                                    @error('min')
                                        <small style="color: red">{{$message}}</small>
                                    @enderror
                                </div>

                                <div class="input-fields">
                                    <label for="">SMS</label>
                                    <input type="number" placeholder="Cantidad de mensajes" name='sms' value="{{ old('sms')}}" required>
                                    @error('sms')
                                        <small style="color: red">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="input-fields">
                                    <label for="" style="margin-right: 9%;">GB</label>
                                    <input type="number" placeholder="Cantidad de GB"  name='gb' value="{{ old('gb')}}" required>
                                    @error('gb')
                                        <small style="color: red">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="cont-botton" style="align-items: center; justify-content: center;">
                                <button class="next" type=submit >
                                    <span class="btnText">Agregar</span>
                                    <i class="uil uil-navigator"></i>
                                </button>

                            </div> 
                        </div>
                    </div>      
                </form>
            </div>
    </section>
@endsection