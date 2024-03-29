@extends('layouts.layout')
@section('header-i')
@endsection

@section('content')
    <section style="margin-top: 5%; margin-left:2%;" class="flex">
        <div class="container-form">
            <header style="margin-left: -90%;" >Registro</header>

            <form action="{{ route('crear-operador') }}" method="POST">
                @csrf
                <div class="form firts"> <!--Primer form-->
                    <div class="details personal">
                        <span class="title"> Detalles personales</span>
                    
                        <div class="fields" >
                            <div class="input-fields">
                                <label for="nombre">Nombre</label>
                                <input type="text" name='nombre' placeholder="Nombre" value="{{ old('nombre')}}" required>
                            </div>
                            <div class="input-fields">
                                <label for="apellido">Apellido</label>
                                <input type="text" name='apellido' placeholder="Apellido" value="{{ old('apellido')}}" required>
                            </div>
                            <div class="input-fields">
                                <label for="fecha_nac">Fecha nacimiento</label>
                                <input type="date" max="2005-12-31" name='fecha_nac'  placeholder="Fecha de nacimiento" value="{{ old('fecha_nac')}}"required>
                            </div>

                            <div class="input-fields" >
                                <label for="cedula">CI</label>
                                <input type="number" name='cedula' placeholder="Cédula de identidad" value="{{ old('cedula')}}" required>
                                @error('cedula')
                                    <small style="color: red">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="input-fields">
                                <label for="fecha_nac">Correo</label>
                                <input type="email" max="2005-12-31" name='email'  placeholder="Correo" value="{{ old('email')}}"required>
                                @error('email')
                                    <small style="color: red">{{$message}}</small>
                                @enderror
                            </div>
                            
                            <?php
                                $comb = "abc0123456789";
                                $shfl = str_shuffle($comb);
                                $pwd = substr($shfl,0,4);
                            ?>

                            <div class="input-fields">
                                <label for="">Clave asignada</label>
                                <h2><?php echo $pwd;?></h2>
                                <input type="hidden" name='password' value="{{$pwd}}" required>
                            </div>
                            
                             <!--adaptado maquina prof-->
                            <div style="justify-content: space-between; width: 62%; display:flex; flex-direction: row; ">
                                <div class="input-fields">
                                    <label for="estado">Estado</label>
                                    <select name="estado" value="{{ old('estado')}}" required>
                                        <option value="Amazonas">Amazonas</option>
                                        <option value="Anzoategui">Anzoátegui</option>
                                        <option value="Apure">Apure</option>
                                        <option value="Aragua">Aragua</option>
                                        <option value="Barinas">Barinas</option>
                                        <option value="Bolivar">Bolívar</option>
                                        <option value="Carabobo">Carabobo</option>
                                        <option value="Cojedes">Cojedes</option>
                                        <option value="Delta Amacuro">Delta Amacuro</option>
                                        <option value="Dependencias Federales">Dependencias Federales</option>
                                        <option value="Distrito Capital">Distrito Capital</option>
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
                            </div>     
                        </div>

                    </div>

                    <div class="details personal">
                        <header>Pregunta de seguridad</header>
                        <span class="title" style="margin-top: 2%; text-align: center;"> ¿Cúal es el nombre completo de tu mamá?</span>
                        <div class="fields" style="align-items: center; justify-content: center;">
                            <div class="input-fields"  >
                                <label for="respuesta">Respuesta</label>
                                <input type="text" name="respuesta" id="agrandar-input" placeholder="Ingrese su respuesta" value="{{ old('respuesta')}}" required style="align-items: center; justify-content: center;">
                            </div>
                            
                        </div>
                        <input type="hidden" name='tipo_user' value="1" required>
                        <input type="hidden" name='estado_user' value="1" required>

                       
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