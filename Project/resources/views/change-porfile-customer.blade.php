@extends('layouts.layout')
@section('header-i')
@endsection

@section('content')
<section class="flex">
    <section style="margin-left: 3%; " class="container-card-usu">
        <div class="container-columnas">
        
            <div class="col3">
                <h2 class="titulo">Modificar</h2>
                <hr class="featurette-divider-mp">
                <span style="margin-left: 1%;" >Datos personales</span>
                <div class="datos">
                    <div class="contenedor-user">
                        <div class="flex-item">
                            <label class="label-p" for="name">Nombre</label>
                            <input class="pys"type="text" placeholder="Ingrese el nombre"  style="padding-left:10px; padding-right: 10px;" value="Camila">
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Apellido</label>
                            <input class="pys" type="text" placeholder="Ingrese el apellido" style="padding-left:10px; padding-right: 10px;" value="Fernandez">
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Fecha de nacimiento</label>
                            <input class="pys" type="date" placeholder="Ingrese la fecha"  style="padding-left:10px; padding-right: 10px;" value="13/12/2006">
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

                <span style="margin-left: 1%;">Datos de la línea</span>
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
                        <select option="estado" id="estado" style="padding-left:10px; padding-right: 10px;">
                            <option value="Post-pago">Activa</option>
                            <option value="Post-pago">En espera</option>
                            <option value="Pre-pago">Inactiva</option>
                        </select>
                    </div>
                </div>
                <div class="contenedor-user">
                    <div class="flex-item">
                        <label class="label-p" for="pago">Tipo de Pago</label>
                        <select option="pago" id="pago" style="padding-left:10px; padding-right: 10px;">
                            <option value="Post-pago">Post-pago</option>
                            <option value="Pre-pago">Pre-pago</option>
                        </select>
                    </div>
                </div>
                <h2 style="margin-left: 1%;" class="titulo">Planes y servicios de la línea</h2>
                <hr style="margin-left: 1%;" class="featurette-divider-mp">
                <div class="contenedor-user">
                    <div class="flex-item">
                        <label class="label-p" for="plan">Plan</label>
                        <select pago="plan" id="pago" style="padding-left:10px; padding-right: 10px; width: 250px;">
                            <option class="pys" value="Básico" >Básico</option>
                            <option class="pys" value="Intermedio">Intermedio</option>
                            <option class="pys" value="Premium">Premium</option>
                        </select>
                    </div>
                    <div class="flex-item">
                        <label class="label-p" for="plan">Servicios</label>
                        <select pago="servicio" id="pago" style="padding-left:10px; padding-right: 10px; width: 250px;">
                            <option class="pys" value="Básico" >Llamadas extras</option>
                            <option class="pys" value="Intermedio">Mensajes extras</option>
                            <option class="pys" value="Premium">Datos extras</option>
                        </select>
                    </div>
                </div>
                <div class="contenedor-userb">
                    <div class="flex-item">
                        <button  type="submit" class="cancelar">Cancelar cambios</button>
                    </div>
                    <div class="flex-item">
                        <button type="submit" class="cambiar">Guardar cambios</button>
                    </div>
                </div>

            </div>
            
        </div>
    </section><br>
    <br><br>
</section>
@endsection