@extends('layouts.layout')
@section('header-i')
@endsection

@section('content')
<!--Servicios-->
<br>
            <div style="margin-left: 390px;" class="container-form" id="container-servicios" >
                <header style=" margin-left: -5%;">Servicios</header>
             <form action="{{ route('crear-servicios') }}"  method="POST">
                @csrf
                 <div class="form firts" style=" margin-left: -5%;"> 
                     <div class="details personal">
                         <span class="title"> Detalles del servicio</span>
                     
                         <div class="fields" >
                             <div class="input-fields">
                                 <label for="">Nombre</label>
                                 <input type="text" placeholder="Nombre" name='nombre' value="{{ old('nombre')}}" required>
                                 @error('nombre')
                                    <small style="color: red">{{$message}}</small>
                                @enderror
                             </div>
                             <div class="input-fields">
                                 <label for="">Precio</label>
                                 <input type="number" placeholder="Precio"  name='precio' value="{{ old('precio')}}"required>
                                 @error('precio')
                                    <small style="color: red">{{$message}}</small>
                                @enderror
                             </div>
                         </div>
                        <div class="fields" >
                            <div class="input-fields" >
                                 <div style="flex-direction: row;">
                                     <label for="" style="margin-right: 58px;">Tipo</label>
                                     <label for="">Cantidad</label>
                                 </div>
                                
                                 <div style="flex-direction: row; width: 70%;">
                                     <select name="tipo" value="{{ old('tipo')}}"required id="#style-exception" style="width: 80px;">
                                         <option value="min">MIN</option>
                                         <option value="sms">SMS</option>
                                         <option value="gb">GB</option>
                                     </select>
                                     
                                     <input type="number" placeholder="Cantidad" name='cantidad' value="{{ old('cantidad')}}" required style="width: 55%;">
                                    @error('cantidad')
                                        <small style="color: red">{{$message}}</small>
                                    @enderror
                                 </div>
                            </div>
                        </div>
                         <div class="cont-botton" style="align-items: center; justify-content: center;">
                             <button class="next" type=submit>
                                 <span class="btnText" style="font-size: 0.96em;">Agregar</span>
                                 <i class="uil uil-navigator"></i>
                             </button>
                         </div> 
                     </div>
                 </div>      
             </form>
         </div>
@endsection