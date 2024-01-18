@extends('layouts.layout')
@section('header-i')
@endsection

@section('content')
    <div style=" margin-left:330px;" class="container-form">
            <header>Registro</header>

            <form action="/find-worker">
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

                            <div class="input-fields" >
                                <label for="">Usuario</label>
                                <h2> nombreci</h2>
                            </div>
                            <div class="input-fields">
                                <label for="">Clave asignada</label>
                                <h2>nombreci*</h2>
                            </div>
                            <div class="fields" style="justify-content: space-around; width: 550px;">
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
                                    <label for="">Municipio</label>
                                    <input type="text" placeholder="Ingresa el municipio" required>
                                </div>
                            </div>
                           
                        </div>

                    </div>

                    <div class="details personal">
                        <header>Pregunta de seguridad</header>
                        <span class="title" style="margin-top: 2%; text-align: center;"> ¿Cúal es el nombre completo de tu mamá?</span>
                        <div class="fields" style="align-items: center; justify-content: center;">
                            <div class="input-fields"  >
                                <label for="">Respuesta</label>
                                <input type="text" id="agrandar-input" placeholder="Escribe la respuesta" required style="align-items: center; justify-content: center;">
                            </div>
                            
                        </div>
                        
                       
                    </div>
                    <div class="cont-botton">
                        <button class="next">
                            <span class="btnText">Registrar</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div> 
                </div>      
            </form>
        </div>
@endsection