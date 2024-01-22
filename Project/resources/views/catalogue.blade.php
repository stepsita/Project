@extends('layouts.layout')
@section('header-i')
@endsection

@section('content')
<section class="flex">

    <section class="container-card-cat">
        <div class="col3">
            <h2 class="bc-titulo">Planes y servicios</h2>
            <div class="buscar">
                <input type="text" placeholder="Buscar" required />
                <div class="btn">
                    <img src="img/lupa.png" height="20px" width="20px" style="margin-bottom: 1px;">
                </div>
            </div>

            <section class="botones">
                <button class="Boton"> 
                    <a href="/form-planes"> Agregar plan</a> 
                </button> 

                <button class="Boton" style="align-content: space-between;"> 
                    <a href="/form-servicios"> Agregar servicio</a> 
                </button>
            </section>  
        </div>  

        <div class="table">
            <div class="row">
                <div class="column">Plan básico:</div>
                <div class="column">200 min</div>
                <div class="column">400 sms</div>
                <div class="column">4 gb</div>
                <div class="column">5.99$</div>
                <div class="column"><a href="/form-planes-change"> <img class="modificar" class="boton" src="img/modificar.png" height="30px" width="30px"> </a> </div>
                <div class="column"><img class="eliminar" src="img/eliminar.png" height="30px" width="30px"></div>
            </div>
        <hr>
            <div class="row">
                <div class="column">Plan intermedio:</div>
                <div class="column">200 min</div>
                <div class="column">400 SMS</div>
                <div class="column">4 GB</div>
                <div class="column">5.99</div>
                <div class="column"><a href="/form-planes-change"> <img class="modificar" class="boton" src="img/modificar.png" height="30px" width="30px"> </a> </div>
                <div class="column"><img class="eliminar" src="img/eliminar.png" height="30px" width="30px"></div>
            </div>
        <hr>
            <div class="row">
                <div class="column">Llamadas extras</div>
                <div class="column">200 min</div>
                <div class="column">De larga distancia</div>
                <div class="column">3.99$</div>
                <div class="column"> </div>
                <div class="column"><a href="/form-planes-change"> <img class="modificar" class="boton" src="img/modificar.png" height="30px" width="30px"> </a> </div>
                <div class="column"><img class="eliminar" src="img/eliminar.png" height="30px" width="30px"></div>
            </div>
        <hr>
            <div class="row">
                <div class="column">Mensaje extras</div>
                <div class="column">800 SMS</div>
                <div class="column">De larga distancia</div>
                <div class="column">2.99$</div>
                <div class="column"> </div>
                <div class="column"><a href="/form-planes-change"> <img class="modificar" class="boton" src="img/modificar.png" height="30px" width="30px"> </a> </div>
                <div class="column"><img class="eliminar" src="img/eliminar.png" height="30px" width="30px"></div>
            </div>
        <hr>
            <div class="row">
                <div class="column">Datos extras</div>
                <div class="column">25 GB</div>
                <div class="column">Cancela lo consumido</div>
                <div class="column">4.99$</div>
                <div class="column"> </div>
                <div class="column"><a href="/form-planes-change"> <img class="modificar" class="boton" src="img/modificar.png" height="30px" width="30px"> </a> </div>
                <div class="column"><img class="eliminar" src="img/eliminar.png" height="30px" width="30px"></div>
            </div>
        </div>
        <br><br>
     </section> <br><br>
</section>
@endsection