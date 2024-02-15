@extends('layouts.layout')
@section('header-i')
@endsection

@section('content')
<section class="flex">
    <section style="margin-left: 4%;" class="container-card-ope">
        <div class="container-columnas">
            <div class="col3">
                <h2 class="titulo-v">Operador</h2>
                <hr class="featurette-divider-mp">
                <h2 style="margin-left: 1%; margin-bottom:0.5%;" class="titulo2">Datos personales</h2>
                <div class="datos">
                <form action="{{ url('/actualizar-operador', $operador['id'])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="contenedor-user">
                        <div class="flex-item">
                            <label class="label-p" for="name">Nombre</label>
                            <input class="pys" name="nombre" required type="text" placeholder="Nombre"  style="padding-left:10px; padding-right: 10px;" value="{{$operador['nombre']}}">
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Apellido</label>
                            <input class="pys" name="apellido" required type="text" placeholder="Apellido" style="padding-left:10px; padding-right: 10px;" value="{{$operador['apellido']}}">
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Fecha de nacimiento</label>
                            <input class="pys" name="fecha_nac" type="date" placeholder="Fecha de nacimiento" required style="padding-left:10px; padding-right: 10px;" value="{{$operador['fecha_nac']}}">
                        </div>
                    </div>
                    
                    <div class="contenedor-user">
                        <div class="flex-item">
                            <label class="label-p" for="name">Cedula de identidad</label>
                            <input class="pys" name="cedula" type="number" placeholder="Cédula de identidad" style="padding-left:10px; padding-right: 10px;" value="{{$operador['cedula']}}">
                            @error('cedula')
                                <small style="color: red">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Estado</label>
                            <select name="estado" class="pys" style="padding-left:10px; padding-right: 10px;" value="{{$operador['estado']}}" required>
                                <option @if($operador['estado']=="Amazonas") selected @endif value="Amazonas">Amazonas</option>
                                <option @if($operador['estado']=="Anzoategui") selected @endif value="Anzoategui">Anzoátegui</option>
                                <option @if($operador['estado']=="Apure") selected @endif value="Apure">Apure</option>
                                <option @if($operador['estado']=="Aragua") selected @endif value="Aragua">Aragua</option>
                                <option @if($operador['estado']=="Barinas") selected @endif value="Barinas">Barinas</option>
                                <option @if($operador['estado']=="Bolivar") selected @endif value="Bolivar">Bolívar</option>
                                <option @if($operador['estado']=="Carabobo") selected @endif value="Carabobo">Carabobo</option>
                                <option @if($operador['estado']=="Cojedes") selected @endif value="Cojedes">Cojedes</option>
                                <option @if($operador['estado']=="Delta Amacuro") selected @endif value="Delta Amacuro">Delta Amacuro</option>
                                <option @if($operador['estado']=="Dependencias Federales") selected @endif value="Dependencias Federales">Dependencias Federales</option>
                                <option @if($operador['estado']=="Distrito Capital") selected @endif value="Distrito Capital">Distrito Capital</option>
                                <option @if($operador['estado']=="Falcon") selected @endif value="Falcon">Falcón</option>
                                <option @if($operador['estado']=="Guarico") selected @endif value="Guarico">Guárico</option>
                                <option @if($operador['estado']=="Lara") selected @endif value="Lara">Lara</option>
                                <option @if($operador['estado']=="Merida") selected @endif value="Merida">Mérida</option>
                                <option @if($operador['estado']=="Miranda") selected @endif value="Miranda">Miranda</option>
                                <option @if($operador['estado']=="Monagas") selected @endif value="Monagas">Monagas</option>
                                <option @if($operador['estado']=="Nueva Esparta") selected @endif value="Nueva Esparta">Nueva Esparta</option>
                                <option @if($operador['estado']=="Portuguesa") selected @endif value="Portuguesa">Portuguesa</option>
                                <option @if($operador['estado']=="Sucre") selected @endif value="Sucre">Sucre</option>
                                <option @if($operador['estado']=="Tachira") selected @endif value="Tachira">Táchira</option>
                                <option @if($operador['estado']=="Trujillo") selected @endif value="Trujillo">Trujillo</option>
                                <option @if($operador['estado']=="Vargas") selected @endif value="Vargas">Vargas</option>
                                <option @if($operador['estado']=="Yaracuy") selected @endif value="Yaracuy">Yaracuy</option>
                                <option @if($operador['estado']=="Zulia") selected @endif value="Zulia">Zulia</option>
                            </select>
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Municipio</label>
                            <input  class="pys" name="municipio" type="text" placeholder="Ingrese su municipio" style="padding-left:10px; padding-right: 10px;" value="{{$operador['municipio']}}">
                        </div>
                    </div>
                    <div class="contenedor-user">
                        <div class="flex-item">
                            <label class="label-p" for="name">Pregunta de seguridad</label>
                                <h2 style="font-size: 15px; color: rgb(5, 103, 70); margin-top: 1%;">¿Cúal es el nombre completo de tu mamá?</h2>
                                <input name="respuesta" style="width: 550px;" class="pys" type="text" placeholder="Ingrese su respuesta" style="padding-left:10px; padding-right: 10px;" value="{{$operador['respuesta']}}">
                            </div>   
                        </div>
                        <h2 style="margin-left: 1%; margin-bottom:0.5%;" class="titulo2">Datos de ingreso al sistema</h2>
                        <div class="contenedor-op">
                            <div class="flex-item">
                                <label class="label-p" for="codigo">Correo</label>
                                <input class="pys" type="email" name="email" placeholder="Correo"  style="padding-left:10px; padding-right: 10px;" value="{{$operador['email']}}">
                                @error('email')
                                    <small style="color: red">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="flex-item">
                                <label class="label-p" for="numero">Clave asignada</label>
                                <input class="pys" name="password" type="text" placeholder="Contraseña" style="padding-left:10px; padding-right: 10px;" value="{{$operador['password']}}">
                                @error('password')
                                    <small style="color: red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="cont-botton" style="align-items: center; justify-content: center;">
                        <button type="submit" class="cambiar" class="input-mp">Guardar cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </section><br><br>
</section>
@endsection