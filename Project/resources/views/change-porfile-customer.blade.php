@extends('layouts.layout')
@section('header-i')
@endsection

@section('content')
<section class="flex" >
    <section  style="margin-left: 3%; height:90vh;" class="container-card-usu">
        <div class="container-columnas">
        
            <div class="col3">
                <h2 class="titulo">Modificar</h2>
                <hr class="featurette-divider-mp">
                <span style="margin-left: 1%;" >Datos personales</span>
                <div class="datos">
                    @foreach($datos as $dat)
                    <form action="{{ url('/actualizar-linea', $dat['numero'])}}" method="POST">
                        @csrf
                        @method('PATCH') <span>
                        <input type="hidden" name='linea' value="{{$dat['id_linea']}}" required>
                    <div class="contenedor-user">
                        <div class="flex-item">
                            <label class="label-p" for="name">Nombre</label>
                            <input class="pys" type="text" value="{{$dat['nombre']}}" name='nombre' style="padding-left:10px; padding-right: 10px;"  >
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Apellido</label>
                            <input class="pys" type="text" value="{{$dat['apellido']}}" name='apellido' style="padding-left:10px; padding-right: 10px;"  >
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Cedula de identidad</label>
                            <input class="pys" type="number" value="{{$dat['cedula']}}" name='cedula' style="padding-left:10px; padding-right: 10px;"readonly onmousedown="return false;">
                        </div>
                    </div>
                    
                    <div class="contenedor-user">
                        <div class="flex-item">
                            <label class="label-p" for="name">Fecha de nacimiento</label>
                            <input class="pys" type="date" value="{{$dat['fecha_nac']}}" name='fecha_nac' style="padding-left:10px; padding-right: 10px;"  >
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Correo</label>
                            <input class="pys" type="email"  name='correo' value="{{$dat['correo']}} " style="padding-left:10px; padding-right: 10px;"  >
                            @error('correo')
                            <small style="color: red">{{$message}}</small>
                        @enderror
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Estado</label>
                            <select name="estado" class="pys" style="padding-left:10px; padding-right: 10px;" value="{{$dat['estado']}}" required>
                                <option @if($dat['estado']=="Amazonas") selected @endif value="Amazonas">Amazonas</option>
                                <option @if($dat['estado']=="Anzoategui") selected @endif value="Anzoategui">Anzoátegui</option>
                                <option @if($dat['estado']=="Apure") selected @endif value="Apure">Apure</option>
                                <option @if($dat['estado']=="Aragua") selected @endif value="Aragua">Aragua</option>
                                <option @if($dat['estado']=="Barinas") selected @endif value="Barinas">Barinas</option>
                                <option @if($dat['estado']=="Bolivar") selected @endif value="Bolivar">Bolívar</option>
                                <option @if($dat['estado']=="Carabobo") selected @endif value="Carabobo">Carabobo</option>
                                <option @if($dat['estado']=="Cojedes") selected @endif value="Cojedes">Cojedes</option>
                                <option @if($dat['estado']=="Delta Amacuro") selected @endif value="Delta Amacuro">Delta Amacuro</option>
                                <option @if($dat['estado']=="Dependencias Federales") selected @endif value="Dependencias Federales">Dependencias Federales</option>
                                <option @if($dat['estado']=="Distrito Capital") selected @endif value="Distrito Capital">Distrito Capital</option>
                                <option @if($dat['estado']=="Falcon") selected @endif value="Falcon">Falcón</option>
                                <option @if($dat['estado']=="Guarico") selected @endif value="Guarico">Guárico</option>
                                <option @if($dat['estado']=="Lara") selected @endif value="Lara">Lara</option>
                                <option @if($dat['estado']=="Merida") selected @endif value="Merida">Mérida</option>
                                <option @if($dat['estado']=="Miranda") selected @endif value="Miranda">Miranda</option>
                                <option @if($dat['estado']=="Monagas") selected @endif value="Monagas">Monagas</option>
                                <option @if($dat['estado']=="Nueva Esparta") selected @endif value="Nueva Esparta">Nueva Esparta</option>
                                <option @if($dat['estado']=="Portuguesa") selected @endif value="Portuguesa">Portuguesa</option>
                                <option @if($dat['estado']=="Sucre") selected @endif value="Sucre">Sucre</option>
                                <option @if($dat['estado']=="Tachira") selected @endif value="Tachira">Táchira</option>
                                <option @if($dat['estado']=="Trujillo") selected @endif value="Trujillo">Trujillo</option>
                                <option @if($dat['estado']=="Vargas") selected @endif value="Vargas">Vargas</option>
                                <option @if($dat['estado']=="Yaracuy") selected @endif value="Yaracuy">Yaracuy</option>
                                <option @if($dat['estado']=="Zulia") selected @endif value="Zulia">Zulia</option>
                            </select>
                        </div>
                    </div>

                    <div class="contenedor-user" >
                        <div class="flex-item">
                            <label class="label-p" for="name">Ciudad</label>
                            <input name='ciudad' class="pys" type="text" value="{{$dat['ciudad']}}" style="padding-left:10px; padding-right: 10px;" >
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Municipio</label>
                            <input class="pys" name='municipio' type="text" value="{{$dat['municipio']}}" style="padding-left:10px; padding-right: 10px;" >
                        </div>
                        <div class="flex-item">
                            <label class="label-p" for="name">Calle</label>
                            <input class="pys" name='calle' type="text" value="{{$dat['calle']}}" style="padding-left:10px; padding-right: 10px;" >
                        </div>
                    </div>

                <span style="margin-left: 1%;">Datos de la línea</span>
                <div class="contenedor-user">
                    <div class="flex-item">
                        <label class="label-p" for="codigo">Código</label>
                        <h2 style="outline: none; color:#179c2b; padding: 0 15px; height: 42px; width: 220px;margin: 8px 0; font-size: 20px; font-weight:600; font-weight: 400;"> 0411</h2>                    
                    </div>
                    <div class="flex-item">
                        <label class="label-p" for="numero">Número asignado</label>
                        <h2 style="outline: none; color:#179c2b; padding: 0 15px; height: 42px; width: 220px;margin: 8px 0; font-size: 20px; font-weight:600; font-weight: 400;">{{$dat['numero']}}</h2>                    
                    </div>
                    <div class="flex-item">
                        <label class="label-p" for="pago">Tipo de Pago</label>
                        <select name="pago" option="pago" id="tipo_pago"  style="padding-left:10px; padding-right: 10px;">
                            <option  @if($dat['pago']=="prepago") selected @endif value="prepago">Pre-pago</option>
                            <option  @if($dat['pago']=="postpago") selected @endif value="postpago">Post-pago</option>
                        </select>
                    </div>
                </div>
                @endforeach
                <div class="cont-botton" style="align-items: center; justify-content: center;">
                    <button type="submit" class="cambiar" class="input-mp">Guardar cambios</button>
                </div>
            </div>
        </form>
        </div>  
        
    </section>
</section>
<section id="target_campo_card">
<div class="cont-plan-service" >
    <section  style="margin-left: 3%; height:48vh;" class="container-card-usu" id="target_campo_plan">
        <div class="container-columnas">
            <div class="col3">
                <h2 class="titulo">Planes</h2>
                <hr class="featurette-divider-mp"> 
                <div style="margin:0px">
                    <div class="col-md-4" >
                        <div class="flex-item">
                            {{-- @foreach($contratoPlan as $dat) --}}
                                <form action="{{ url('/actualizar-p', $infoLinea->id)}}" method="POST">
                                
                                    @csrf
                                    @method('PATCH') 
                                    <input type="hidden" name='operador' value="{{$operador['id']}}" required>
                                   
                                    
                                        <div class="flex-item">
                                            <label class="label-p" for="name">Tu plan</label>
                                            <input class="pys" name='calle' type="text" value="{{ $contratoPlan != '' ? $contratoPlan->plane->nombre : ''}}" style="padding-left:10px; padding-right: 10px;width: 150px;" >
                                            @if ($errors->has('plan'))
                                                <small style="color: red">{{ $errors->first('plan') }}</small>
                                            @endif
                                        </div>
                                        <div class="flex-item">
                                            <label class="label-p" for="plan">Plan</label>
                                            <select name="plan" id="pago" style="padding-left:10px; padding-right: 10px; width: 250px;">
                                                   @foreach($plan as $data)
                                                        @if ($data['estado']==1)
                                                            <option @if($data['nombre']==$dat['nombre_plan']) selected @endif value="{{$data['id']}}"> {{$data['nombre']}}</option>
                                                        @endif
                                                    @endforeach
                                            </select> 
                                            
                                        </div>
                                    
                        </div>
                    </div>
                    <div class="cont-botton" style="align-items: center; justify-content: center;">
                        <button type="submit" class="cambiar" class="input-mp">Guardar cambios</button>
                    </div>                                  
                </form>  

                </div>
            </div>
        </div>
    </section>
        
    <section  style="margin-left: 3%; height:48vh;" class="container-card-usu" id="target_campo_servicio">
        <div class="container-columnas">
            <div class="col3"> 
                <h2 class="titulo">Servicios</h2>
                <hr class="featurette-divider-mp"> 
                <div  style="margin:0px">
                    <div class="col-md-4">
                        <div class="flex-item">
                                <form action="{{ url('/actualizar-s', $infoLinea->id)}}" method="POST">
                                    @csrf
                                    @method('PATCH') 
                                    <input type="hidden" name='operador' value="{{$operador['id']}}" required>
                                    <div class="flex-item">
                                        <label class="label-p" for="name">Tu servicio</label>
                                        <input class="pys" name='calle' type="text" value="{{ $contratoServicio != '' ? $contratoServicio->servicios->nombre : ''}}" style="padding-left:10px; padding-right: 10px; width: 150px;" >
                                        @if ($errors->has('servicio'))
                                                <small style="color: red">{{ $errors->first('servicio') }}</small>
                                        @endif
                                    </div>
                                    <label class="label-p" for="plan">Servicio</label>
                                    <select name="servicio" id="pago" style="padding-left:10px; padding-right: 10px; width: 250px;">
                                        @foreach($servicio as $data)
                                            @if ($data['estado']==1)
                                                <option @if($data['nombre']==$dat['nombre_plan']) selected @endif value="{{$data['id']}}"> {{$data['nombre']}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                        </div>
                    </div>
                    
                    <div class="cont-botton" style="align-items: center; justify-content: center;">
                        <button type="submit" class="cambiar" class="input-mp">Guardar cambios</button>
                    </div>
                </form>

                </div>
            </div>
        </div>
    </section>
</div>
</section>
    <br>
    <br><br> 

<script src="{{ asset('js/app.js')}}"></script>

<script>
    const tipoPagoSelect = document.getElementById('tipo_pago');
    const targetCampoPlan = document.getElementById('target_campo_plan');
    const targetCampoServicio = document.getElementById('target_campo_servicio'); 
    const targetCard = document.getElementById('target_campo_card');

    tipoPagoSelect.addEventListener('change', function() {
        if (tipoPagoSelect.value === 'postpago') {
            targetCampoPlan.style.visibility = 'hidden';
            targetCampoServicio.style.visibility = 'hidden';
            document.getElementById('target_campo_card').style.display = 'none';
         
        } else {
            targetCampoPlan.style.visibility = 'visible';
            targetCampoServicio.style.visibility = 'visible';
            document.getElementById('target_campo_card').style.display = 'block';
        }
    });
</script>


                            
@endsection