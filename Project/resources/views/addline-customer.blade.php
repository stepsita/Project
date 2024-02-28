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
                            <!--                   
                            <div class="input-fields">
                                <label for="">Tipo de pago</label>
                                <select name="pago" value="{{ old('pago')}}" required>
                                    <option value="prepago">Pre-pago</option>

                                    <option value="postpago">Post-pago</option>
                                </select>
                            </div>
                            <div class="input-fields">
                                <label for="">Plan</label>
                                <select name="plan" value="{{ old('plan')}}" required>
                                    @foreach($planes as $dat)
                                        @if ($dat['estado']==1)
                                            <option value="{{$dat['id']}}">{{$dat['nombre'];}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                          
                            <div class="row">
                                <div class="col-md-4">
                                    <button class="Btn" id="boton2">
                                        <div class="sign">+</div>
                                        <div class="text-plussing">Servicio</div>
                                    </button>
                                </div>
                            
                                <div class="col-md-8">
                                    <div class="input-fields" id="servicioExtra2" style="display: none;">
                                        <label for="">Servicios</label>
                                        <select name="servicio" value="{{ old('servicio')}}"  required>
                                            @foreach($servicios as $dat)
                                                @if ($dat['estado']==1)
                                                    <option value="{{$dat['id']}}">{{$dat['nombre']}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>-->
                            <div class="campos-de-entrada">
    <label for="">Tipo de pago</label>
    <select name="pago" id="tipo_pago" value="{{ old('pago')}}" required>
        <option value="prepago">Pre-pago</option>
        <option value="postpago">Post-pago</option>
    </select>
</div>

<div class="campos-de-entrada" id="seccion_plan">
    <label for="">Plan</label>
    <select name="plan" value="{{ old('plan')}}">
        @foreach($planes as $dat)
            @if ($dat['estado']==1)
                <option value="{{$dat['id']}}">{{$dat['nombre'];}}</option>
            @endif
        @endforeach
    </select>
</div>

<div class="fila" id="fila_servicios">
    <div class="col-md-4">
        <button class="Btn" id="boton2">
            <div class="signo">+</div>
            <div class="texto-agregar">Servicio</div>
        </button>
    </div>

    <div class="col-md-8">
        <div class="campos-de-entrada" id="servicioExtra2" style="display: none;">
            <label for="">Servicios</label>
            <select name="servicio" value="{{ old('servicio')}}">
                <option value="NULL">Elija un servicio<option>
                @foreach($servicios as $dat)
                    @if ($dat['estado']==1)
                        <option value="{{$dat['id']}}">{{$dat['nombre']}}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>
</div>

<script>
    const selectTipoPago = document.getElementById('tipo_pago');
    const seccionPlan = document.getElementById('seccion_plan');
    const filaServicios = document.getElementById('fila_servicios');

    let planOculto = false; // Bandera para rastrear la visibilidad del "Plan"
    let serviciosOcultos = false; // Bandera para rastrear la visibilidad de "Servicios"

    selectTipoPago.addEventListener('change', function() {
        if (selectTipoPago.value === 'postpago') {
            // Ocultar elementos si aún no están ocultos
            if (!planOculto) {
                seccionPlan.style.display = "none";
                planOculto = true;
            }
            if (!serviciosOcultos) {
                filaServicios.style.display = "none";
                serviciosOcultos = true;
            }
        } else if (selectTipoPago.value === 'prepago') {
            // Mostrar elementos si estaban ocultos previamente
            if (planOculto) {
                seccionPlan.style.display = "";
                planOculto = false;
            }
            if (serviciosOcultos) {
                filaServicios.style.display = "";
                serviciosOcultos = false;
            }
        }
    });
</script>

<script>
    document.getElementById("boton2").addEventListener("click", function(event) {
        event.preventDefault();
        var servicioExtra = document.getElementById("servicioExtra2");
        if (servicioExtra.style.display === "none") {
            servicioExtra.style.display = "block";
        } else {
            servicioExtra.style.display = "none";
        }
    });
</script>



                            


                            <input type="hidden" name='estado_linea' value="1" required>
                            <input type="hidden" name='fecha' value="2024-08-14" required>
                            <input type="hidden" name='operador' value="{{$operador['id'];}}" required>
                            <input type="hidden" name='estado_plan' value="1" required>

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