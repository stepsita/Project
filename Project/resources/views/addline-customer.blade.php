@extends('layouts.layout')
@section('header-i')
@endsection

@section('content')
    <section style="margin-top: 5%; margin-left:2%;" class="flex">
        <div style="max-width: 650px;" class="container-form" >
            <header style="margin-left: -65%;">Agregar nueva línea</header>
            <form action="{{route('añadir-linea')}}" method="POST">
                @csrf
                <div class="form firts"> <!--Primer form-->
                    <div class="details personal">
                        <span class="title" style="margin-top: 2%; "> Detalles de la línea</span>                 
                        <div class="fields" id="data_line"style="margin-right: 15%;"> <!--hay que modificar esto en java. Debido a que hay que ver 
                                                                                            lo de como va a traer la info cuando sean varias lineas por cliente-->
                                <input type="hidden" name='cedula' value="{{$cedula}}" required>
                                <div class="input-fields" >
                                <label for="">Código</label>
                                <h2> 0411</h2>
                                <input type="hidden" name='codigo' value="0411" required>
                            </div>
                            <div class="input-fields">
                                <label for="">Número asignado</label>
                                <?php
                                    $comb = "0123456789";
                                    $shfl = str_shuffle($comb);
                                    $pwd = substr($shfl,0,7);
                                ?>
                                <h2><?php echo $pwd;?></h2>
                                <input type="hidden" name='numero' value="{{$pwd}}" required>
                            </div>                         

                            <div class="input-fields">
                            <label for="">Plan</label>
                                <select name="plan" value="{{ old('plan')}}" required>
                                    @foreach($planes as $dat)
                                        @if ($dat['estado']==1)
                                            <option value="{{$dat['id'];}}">{{$dat['nombre'];}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                          
                            <div class="input-fields">
                                <label for="">Tipo de pago</label>
                                <select name="pago" value="{{ old('pago')}}" required>
                                    <option value="postpago">Post-pago</option>
                                    <option value="prepago">Pre-pago</option>
                                </select>
                            </div>
                            <div class="input-fields">
                                <label for="">Servicios</label>
                                <select name="servicio" value="{{ old('servicio')}}"  required>
                                    @foreach($servicios as $dat)
                                        @if ($dat['estado']==1)
                                            <option value="{{$dat['id'];}}">{{$dat['nombre'];}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <input type="hidden" name='estado_linea' value="1" required>
                            <input type="hidden" name='fecha' value="2024-08-14" required>
                        </div>
                        <div class="cont-botton" >
                            <button class="next" type="submit">
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