@extends('layouts.layout')
@section('header-i')
@endsection

@section('content')
    
    <section style="margin-top: 5%; margin-left:6%;" class="flex">
        
        <div class="container-form">
            <header>Registro</header>
            <form action="/find-customer">
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
                                <label for="">Estado</label>
                                <select name="ciudades" required>
                                    <option value="valencia">Aragua</option>
                                    <option value="valencia">Barquisimento</option>
                                    <option value="caracas">Caracas</option>
                                    <option value="valencia">Mérida</option>
                                    <option value="valencia">Valencia</option>
                                    <option value="valencia">Zulia</option>
                                </select>
                            </div>
                            <div class="input-fields">
                                <label for="">Ciudad</label>
                                <input type="text" placeholder="Ingrese su Ciudad" required>
                            </div>
                            <div class="fields" style="justify-content: space-between; width: 550px;">
                                <div class="input-fields">
                                    <label for="">Municipio</label>
                                    <input type="text" placeholder="Ingrese su Municipio" required>
                                </div>
                                <div class="input-fields">
                                    <label for="">Calle</label>
                                    <input type="text" placeholder="Ingrese la Calle" required>
                                </div>
                            </div>
                            <div class="fields" style="justify-content: space-between; width: 550px;">
                                <div class="input-fields" >
                                    <label for="">Correo electrónico</label>
                                    <input type="text" placeholder="nombre123" required>
                                </div>
                                <div class="input-fields">
                                    <label for="">Dirección de correo</label>
                                    <input type="email" placeholder="@gmail.com" required>
                                </div>
                            </div>
                           
                        
                        </div>

                    </div>

                    <div class="details personal">
                        
                        <span class="title" style="margin-top: 2%; "> Detalles de la línea</span>
                    
                        <div class="fields" id="data_line"style="margin-right: 15%;"> <!--hay que modificar esto en java. Debido a que hay que ver 
                                                                                            lo de como va a traer la info cuando sean varias lineas por cliente-->
                            <div class="input-fields" >
                                <label for="">Código</label>
                                <h2> 0411</h2>
                            </div>
                            <div class="input-fields">
                                <label for="">Número asignado</label>
                                <h2>6086582</h2>
                            </div>
                            

                            <div class="input-fields">
                            <label for="">Plan</label>
                                <select name="ciudades" required>
                                    <option value="valencia">Básico</option>
                                    <option value="valencia">Intermedio</option>
                                    <option value="caracas">Premium</option>
                                </select>
                            </div>
                           
                          
                            <div class="input-fields">
                                <label for="">Tipo de pago</label>
                                <select name="pagos" required>
                                    <option value="valencia">Post-pago</option>
                                    <option value="valencia">Pre-pago</option>
                                </select>
                            </div>
                            
                        </div>
                        <div class="cont-botton">
                            <button class="next">
                                <span class="btnText">Registrar</span>
                                <i class="uil uil-navigator"></i>
                            </button>
                        </div> 
                    </div>
                </div>      
            </form>
        </div>
    </section>
@endsection