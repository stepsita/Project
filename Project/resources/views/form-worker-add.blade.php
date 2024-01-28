@extends('layouts.layout')
@section('header-i')
@endsection

@section('content')
    <section style="margin-top: 5%; margin-left:2%;" class="flex">
        <div class="container-form">
            <header style="margin-left: -90%;" >Registro</header>

            <form action="/operador" method="POST">
                @csrf
                <div class="form firts"> <!--Primer form-->
                    <div class="details personal">
                        <span class="title"> Detalles personales</span>
                    
                        <div class="fields">
                            <div class="input-fields">
                                <label for="nombre">Nombre</label>
                                <input type="text" name='nombre' placeholder="Nombre" required>
                            </div>
                            <div class="input-fields">
                                <label for="apellido">Apellido</label>
                                <input type="text" name='apellido' placeholder="Apellido" required>
                            </div>
                            <div class="input-fields">
                                <label for="fecha_nac">Fecha nacimiento</label>
                                <input type="date" max="2005-12-31" name='fecha_nac'  placeholder="Fecha de nacimiento" required>
                            </div>

                            <div class="input-fields">
                                <label for="cedula">CI</label>
                                <input type="number" name='cedula' placeholder="Cédula de identidad" required>
                            </div>

                            <div class="input-fields" >
                                <label for="usuario">Usuario</label>
                                <input type="text" name='usuario' placeholder="Usuario" required>
                            </div>

                            <?php
                                $comb = "abc0123456789";
                                $shfl = str_shuffle($comb);
                                $pwd = substr($shfl,0,4);
                            ?>

                            <div class="input-fields">
                                <label for="">Clave asignada</label>
                                <h2><?php echo $pwd;?></h2>
                                <input type="hidden" name='clave' value={{$pwd}}  required>
                            </div>
                            
                            <div class="fields" style="justify-content: space-around; width: 550px;">
                                <div class="input-fields">
                                    <label for="estado">Estado</label>
                                    <select name="estado" required>
                                        <option value="Amazonas">Amazonas</option>
                                        <option value="Anzoategui">Anzoátegui</option>
                                        <option value="Apure">Apure</option>
                                        <option value="Aragua">Aragua</option>
                                        <option value="Aragua">Aragua</option>
                                        <option value="Barinas">Barinas</option>
                                        <option value="Bolivar">Bolívar</option>
                                        <option value="Carabobo">Carabobo</option>
                                        <option value="Cojedes">Cojedes</option>
                                        <option value="Delta Amacuro">Delta Amacuro</option>
                                        <option value="Dependencias Federales">Dependencias Federales</option>
                                        <option value="Distrito Federal">Distrito Federal</option>
                                        <option value="Falcon">Falcón</option>
                                        <option value="Guarico">Guárico</option>
                                        <option value="Lara">Lara</option>
                                        <option value="Merida">Mérida</option>
                                        <option value="Miranda">Miranda</option>
                                        <option value="Monagas">Monagas</option>
                                        <option value="Nueva Esparta">Nueva Esparta</option>
                                        <option value="Portuguesa">Portuguesa</option>
                                        <option value="Sucre">Sucre</option>
                                        <option value="Tachira">Táchira</option>
                                        <option value="Trujillo">Trujillo</option>
                                        <option value="Vargas">Vargas</option>
                                        <option value="Yaracuy">Yaracuy</option>
                                        <option value="Zulia">Zulia</option>
                                    </select>
                                </div>

                                <div class="input-fields">
                                    <label for="municipio">Municipio</label>
                                    <input type="text" name="municipio" placeholder="Ingresa el municipio" required>
                                </div>
                            </div>
                           
                        </div>

                    </div>

                    <div class="details personal">
                        <header>Pregunta de seguridad</header>
                        <span class="title" style="margin-top: 2%; text-align: center;"> ¿Cúal es el nombre completo de tu mamá?</span>
                        <div class="fields" style="align-items: center; justify-content: center;">
                            <div class="input-fields"  >
                                <label for="respuesta">Respuesta</label>
                                <input type="text" name="respuesta" id="agrandar-input" placeholder="Escribe la respuesta" required style="align-items: center; justify-content: center;">
                            </div>
                            
                        </div>
                        
                       
                    </div>
                    <div class="cont-botton">
                        <button class="next" type=submit>
                            <span class="btnText">Registrar</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div> 
                </div>      
            </form>
        </div>
    </section>
@endsection