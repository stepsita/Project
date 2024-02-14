@extends('layouts.layout')
@section('header-i')
@endsection

@section('content')
    
    <section style="margin-top: 5%; margin-left:6%;" class="flex">
        
        <div class="container-form">
            <header style="margin-left: -91%; margin-top:1%;" >Registro</header>
            <form action="{{ route('crear-clientes') }}" method="POST">
                @csrf
                <div class="form firts"> <!--Primer form-->
                    <div class="details personal">
                        <span class="title"> Detalles personales</span>
                    
                        <div class="fields">
                            <div class="input-fields">
                                <label for="">Nombre</label>
                                <input type="text" name='nombre' placeholder="Nombre" value="{{ old('nombre')}}" required>
                            </div>
                            <div class="input-fields">
                                <label for="">Apellido</label>
                                <input type="text" name='apellido' placeholder="Apellido" value="{{ old('apellido')}}" required>
                            </div>
                            <div class="input-fields">
                                <label for="">Fecha nacimiento</label>
                                <input type="date" max="2005-12-31" name='fecha_nac'  placeholder="Fecha de nacimiento" value="{{ old('fecha_nac')}}"required>
                            </div>

                            <div class="input-fields">
                                <label for="">CI</label>
                                <input type="number" name='cedula' placeholder="Cédula de identidad" value="{{ old('cedula')}}" required>
                                @error('cedula')
                                    <small style="color: red">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="input-fields">
                                <label for="estado">Estado</label>
                                <select name="estado" value="{{ old('estado')}}" required>
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
                            <div class="input-fields">
                                <label for="">Ciudad</label>
                                <input type="text" name='ciudad' placeholder="Ingrese su Ciudad" value="{{ old('ciudad')}}" required>
                            </div>
                            <!-- Espacio adaptado a la pantalla del prof-->
                            <div class="input-fields">
                                <label for="">Municipio</label>
                                <input type="text" name='municipio' placeholder="Ingrese su Municipio" value="{{ old('municipio')}}" required>
                            </div>
                            <div class="input-fields">
                                <label for="">Calle</label>
                                <input type="text" name="calle" placeholder="Ingrese la Calle" value="{{ old('calle')}}" required>
                            </div>
                            <div class="input-fields" >
                                <label for="">Correo electrónico</label>
                                <input type="email" name='correo' placeholder="nombre123@gmail.com" value="{{ old('correo')}}" required>
                                @error('correo')
                                    <small style="color: red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name='estado_cliente' value="1" required>

                    <div class="details personal">
                        <span class="title" style="margin-top: 2%; "> Detalles de la línea</span>
                        <div class="fields" id="data_line"> <!--hay que modificar esto en java. Debido a que hay que ver 
                                                                                          lo de como va a traer la info cuando sean varias lineas por cliente-->
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
                                <select name="plan" required>
                                    @foreach($planes as $dat)
                                        <option value="{{$dat['id'];}}">{{$dat['nombre'];}}</option>
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
                            <input type="hidden" name='servicio' value="0" required>
                            <input type="hidden" name='estado_linea' value="1" required>
                            <input type="hidden" name='fecha' value="2024-08-14" required>



                        </div>
                        <div class="cont-botton">
                            <button class="next" type="submit">
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