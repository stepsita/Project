@extends('layouts.layout')
@section('header-i')
@endsection

@section('content')
<section style="height: 90vh; margin-left:263px;" class="container-card-pys">
        <div class="container-columnas">
        
            <div class="col3">
                <h2 class="titulo-v">Visualizar</h2>
                <hr class="featurette-divider-mp">
                <h2 class="titulo2">Datos personales</h2>

                <div class="datos">
                    <div class="contenedor-user">
                        <div class="flex-item">
                            <label class="label-p" for="name">Nombre</label>
                            <input class="pys" type="text" placeholder="Ingrese el nombre"  style="padding-left:10px; padding-right: 10px;" value="Camila">
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Apellido</label>
                            <input class="pys" type="text" placeholder="Ingrese el apellido" style="padding-left:10px; padding-right: 10px;" value="Fernandez">
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Fecha de nacimiento</label>
                            <input class="pys" type="text" placeholder="Ingrese la fecha"  style="padding-left:10px; padding-right: 10px;" value="13/12/2006">
                        </div>
                    </div>
                    
                    <div class="contenedor-user">
                        <div class="flex-item">
                            <label class="label-p" for="name">Cedula de identidad</label>
                            <input class="pys" type="number" placeholder="Ingrese la cedula" style="padding-left:10px; padding-right: 10px;" value="31998023">
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Ciudad</label>
                            <input class="pys" type="text" placeholder="Ingrese la cedula"  style="padding-left:10px; padding-right: 10px;" value="Caracas">
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Correo</label>
                            <input class="pys" type="mail" placeholder="Ingrese rl correo" style="padding-left:10px; padding-right: 10px;" value="Colón">
                        </div>
                    </div>

                    <div class="contenedor-user">
                        <div class="flex-item">
                            <label class="label-p" for="name">Codigo postal</label>
                            <input class="pys" type="number" placeholder="Ingrese el codigo postal" style="padding-left:10px; padding-right: 10px;" value="1030">
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Calle</label>
                            <input class="pys" type="text" placeholder="Ingrese la calle de vivienda"  style="padding-left:10px; padding-right: 10px;" value="Mexico">
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Casa/apartamento</label>
                            <input class="pys" type="text" placeholder="Ingrese el numero" style="padding-left:10px; padding-right: 10px;" value="25">
                        </div>
                    </div>
                </div>

                <h2 class="titulo2">Datos de la línea</h2>
                <div class="contenedor-user">
                    <div class="flex-item">
                        <label class="label-p" for="codigo">Código</label>
                        <input class="pys" type="number" placeholder="Ingrese el código"  style="padding-left:10px; padding-right: 10px;" value="0411">
                    </div>
                    <div class="flex-item">
                        <label class="label-p" for="numero">Número asignado</label>
                        <input class="pys" type="text" placeholder="Número" style="padding-left:10px; padding-right: 10px;" value="4630501">
                    </div>
                    <div class="flex-item">
                        <label class="label-p" for="estado">Estado</label>
                        <input class="pys" type="text" placeholder="Tipo de servicio"  style="padding-left:10px; padding-right: 10px;" value="Activa">
                    </div>
                </div>
            </div>
        </div>
    </section><br>

    
    <section style="height: 88vh; margin-left:263px;" class="container-card-pys">
            <div class="col3">
                <h2 class="titulo-v">Planes y servicios de la línea</h2>
                <hr class="featurette-divider-mp">
                
                <h2 class="titulo2">Plan adquirido</h2>

                <div class="datos">

                    <div class="contenedor-user">
                        <div class="flex-item">
                            <label class="label-p" for="name">Nombre del plan</label>
                            <input class="pys" type="text" placeholder="Ingrese el nombre"  style="padding-left:10px; padding-right: 10px;" value="Intermedio">
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Precio</label>
                            <input class="pys" type="text" placeholder="Ingrese el apellido" style="padding-left:10px; padding-right: 10px;" value="$8.99">
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Descripción</label>
                            <input class="pys" type="text" placeholder="Ingrese la fecha"  style="padding-left:10px; padding-right: 10px;" value="Plan de...">
                        </div>
                    </div>
                    
                    <div class="contenedor-user">
                        <div class="flex-item">
                            <label class="label-p" for="name">Min</label>
                            <input class="pys" type="number" placeholder="Ingrese la cedula" style="padding-left:10px; padding-right: 10px;" value="400">
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">SMS</label>
                            <input class="pys" type="text" placeholder="Ingrese la cedula"  style="padding-left:10px; padding-right: 10px;" value="800">
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">GB</label>
                            <input class="pys" type="text" placeholder="Ingrese la urbanización" style="padding-left:10px; padding-right: 10px;" value="10">
                        </div>
                    </div>

                </div>

                    <h2 class="titulo2">Servicio adquirido</h2>
                    <div class="contenedor-user">
                        <div class="flex-item">
                            <label class="label-p" for="estado">Estado</label>
                            <input class="pys" type="text" placeholder="Tipo de servicio"  style="padding-left:10px; padding-right: 10px;" value="Activa">
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="codigo">Nombre del servicio</label>
                            <input class="pys" type="text" placeholder="Ingrese el código"  style="padding-left:10px; padding-right: 10px;" value="Llamadas extras">
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="numero">Precio</label>
                            <input class="pys" type="text" placeholder="Número" style="padding-left:10px; padding-right: 10px;" value="3.99$">
                        </div>
                        
                    </div>
                    
                    <div class="contenedor-user">
                        <div class="flex-item">
                            <label class="label-p" for="servicio">Cantidad</label>
                            <input class="pys" type="text" placeholder="Tipo de servicio"  style="padding-left:10px; padding-right: 10px;" value="200 min">
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="tipo">Descripción</label>
                            <input class="pys" type="text" placeholder="Tipo de servicio"  style="padding-left:10px; padding-right: 10px;" value="Llamadas de...">
                        </div>
                    </div>
            </div>
        </div>
    </section><br><br>
@endsection