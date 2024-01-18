@extends('layouts.layout')


@section('content')
        <div class="container-form">
            <header>Registro</header>

            <form action="#">
                <div class="form firts"> <!--Primer form-->
                    <div class="details personal">
                        <span class="title"> Detalles personales</span>
                    
                        <div class="fields">
                            <div class="input-fields">
                                <label for="">Nombre</label>
                                <input type="text" placeholder="Nombre" required>
                            </div>
                            <div class="input-fields">
                                <label for="">Apellido</label>
                                <input type="text" placeholder="Apellido" required>
                            </div>
                            <div class="input-fields">
                                <label for="">Fecha nacimiento</label>
                                <input type="date" placeholder="Fecha de nacimiento" required>
                            </div>

                            <div class="input-fields">
                                <label for="">CI</label>
                                <input type="number" placeholder="Cédula de identidad" required>
                            </div>
                            <div class="input-fields">
                                <label for="">Ciudad</label>
                                <select name="ciudades" required>
                                    <option value="caracas">Caracas</option>
                                    <option value="valencia">Valencia</option>
                                </select>
                            </div>
                            <div class="input-fields">
                                <label for="">Dirección..</label>
                                <input type="text" placeholder="Descripción de dirección" required>
                            </div>
                        </div>

                    </div>

                    <div class="details personal">
                        <span class="title" style="margin-top: 2%;"> Detalles de la línea</span>
                    
                        <div class="fields" id="data_line">
                            <div class="input-fields">
                                <label for="">Código</label>
                                <h2> 0411</h2>
                            </div>
                            <div class="input-fields">
                                <label for="">Número asignado</label>
                                <h2>6086582</h2>
                            </div>
                            <div class="input-fields">
                                <label for="">Estado</label>
                                <select name="estado" required >
                                    <option value="activa">Activa</option>
                                    <option value="desactiva">Desactiva</option>
                                </select>
                            </div>

                            <div class="input-fields">
                                <label for="">Plan</label>
                                <input type="number" placeholder="Tipo de plan">
                            </div>
                            <div class="input-fields">
                                <label for="">Servicio</label>
                                <input type="text" placeholder="Tipo de servicio" required>
                            </div>
                            <div class="input-fields">
                                <label for="">Tipo de pago</label>
                                <select name="pago" required>
                                    <option value="post-pago">Post-pago</option>
                                    <option value="pre-pago">Pre-pago</option>
                                </select>
                            </div>
                            
                        </div>
                        <div class="cont-botton">
                            <button class="next">
                                <span class="btnText">Next</span>
                                <i class="uil uil-navigator"></i>
                            </button>

                            <button class="Btn" id="boton">
                                <div class="sign">+</div>
                                <div class="text-plussing">Línea</div>

                            </button>
                        </div> 
                    </div>
                </div>      
            </form>
        </div>
@endsection