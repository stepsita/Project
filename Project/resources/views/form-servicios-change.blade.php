@extends('layouts.layout')


@section('content')
<!--Servicios-->
<br>
            <div class="container-form" id="container-servicios" >
             <header>Servicios</header>
 
             <form action="#">
                 <div class="form firts"> 
                     <div class="details personal">
                         <span class="title"> Detalles del servicio</span>
                     
                         <div class="fields" >
                             <div class="input-fields">
                                 <label for="">Nombre</label>
                                 <input type="text" placeholder="Nombre" required>
                             </div>
                             <div class="input-fields">
                                 <label for="">Precio</label>
                                 <input type="number" placeholder="Precio" required>
                             </div>
                         </div>
                         <div class="fields" >
                             <div class="input-fields" >
                                 <div style="flex-direction: row;">
                                     <label for="" style="margin-right: 58px;">Tipo</label>
                                     <label for="">Cantidad</label>
                                 </div>
                                
                                 <div style="flex-direction: row;">
                                     
                                     <select name="tipo" required id="#style-exception" style="width: 80px;">
                                         <option value="min">MIN</option>
                                         <option value="sms">SMS</option>
                                         <option value="gb">GB</option>
                                     </select>
                                     
                                     <input type="number" placeholder="Cantidad" required style="width: 170px;">
                                 </div>
                             </div>
                             <div class="input-fields" >
                                 
                             </div>
 
                             <div class="input-fields">
                                 <label for="">Descripción</label>
                                 <input type="text" placeholder="Descripción del servicio" required>
                             </div>
                         </div>
                         <div class="cont-botton" style="align-items: center; justify-content: center;">
                             <button class="next">
                                 <span class="btnText" style="font-size: 0.96em;">Actualizar</span>
                                 <i class="uil uil-navigator"></i>
                             </button>
                         </div> 
                     </div>
                 </div>      
             </form>
         </div>
@endsection