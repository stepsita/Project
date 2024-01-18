@extends('layouts.layout')


@section('content')
        <div class="container-form" id="container-planes">
            <header>Planes</header>

            <form action="#">
                <div class="form firts" > <!--Primer form-->
                    <div class="details personal" >
                        <span class="title"> Detalles del plan</span>
                    
                        <div class="fields">
                            <div class="input-fields">
                                <label for="">Nombre</label>
                                <input type="text" placeholder="Nombre" required>
                            </div>
                            <div class="input-fields">
                                <label for="">Precio</label>
                                <input type="number" placeholder="Precio" required>
                            </div>
                            <div class="input-fields">
                                <label for="">Descripción</label>
                                <input type="number" placeholder="Descripción del plan" required>
                            </div>
                       
                            <div class="input-fields">
                                <label for="">MIN</label>
                                <input type="number" placeholder="Minutos en llamada" required>
                            </div>

                            <div class="input-fields">
                                <label for="">SMS</label>
                                <input type="number" placeholder="Cantidad de mensajes" required>
                            </div>
                            <div class="input-fields">
                                <label for="" style="margin-right: 9%;">GB</label>
                                <input type="number" placeholder="Cantidad de GB" required>
                            </div>
                        </div>
                        <div class="cont-botton" style="align-items: center; justify-content: center;">
                            <button class="next" >
                                <span class="btnText">Actualizar</span>
                                <i class="uil uil-navigator"></i>
                            </button>

                        </div> 
                    </div>
                </div>      
            </form>
        </div>
@endsection