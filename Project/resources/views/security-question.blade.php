@extends('layouts.layout')


@section('content')
<!--Servicios-->
<br>
         <div class="container-form" id="container-pregunta" >
             <header>Recupera tu contraseña</header>
 
             <form action="#">
                 <div class="form firts"> 
                     <div class="details personal">
                         <span class="title">¿Cúal es el nombre completo de tu mamá?</span>
                     
                         <div class="fields" >
                             <div class="input-fields">
                                 <label for="">Respuesta</label>
                                 <input type="text" id="agrandar-input" placeholder="Escribe la respuesta" required>
                             </div>
                             
                         </div>
                         
                         <div class="cont-botton" style="align-items: center; justify-content: center;">
                             <button class="next">
                                 <span class="btnText" style="font-size: 0.96em;">Siguiente</span>
                                 <i class="uil uil-navigator"></i>
                             </button>
                         </div> 
                     </div>
                 </div>      
             </form>
         </div>
@endsection