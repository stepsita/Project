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
                    <a href="/crear-planes"> Agregar plan</a> 
                </button> 

                <button class="Boton" style="align-content: space-between;"> 
                    <a href="/crear-servicios"> Agregar servicio</a> 
                </button>
            </section>  
        </div>

        <h2 class="bc-titulo" style="text-align: left; margin-left: 6%; margin-bottom:-2%">Planes</h2>
        <br>
        <div class="table">
            @foreach($datos_planes as $dat)
            <div class="row">
                <div class="column">{{$dat['nombre'];}}</div>
                <div class="column">{{$dat['min'];}} min</div>
                <div class="column">{{$dat['sms'];}} sms</div>
                <div class="column">{{$dat['gb'];}} gb</div>
                <div class="column">{{$dat['precio'];}}$</div>
                <div class="column"><a href="/editar-plan/{{$dat['id'];}}/edit"> <img class="modificar" class="boton" src="img/modificar.png" height="30px" width="30px"> </a> </div>
                <div class="column"><img class="eliminar" src="img/eliminar.png" height="30px" width="30px"></div>
            </div>
        <hr>
            @endforeach
        </div>
            <h2 class="bc-titulo" style="text-align: left; margin-left: 6%; margin-bottom:-2%">Servicios</h2>
            <br>
        <div class="table">
            @foreach($datos_servicios as $dat)
            <div class="row">
                <div class="column">{{$dat['nombre'];}}</div>
                <div class="column">{{$dat['tipo'];}}</div>
                <div class="column">{{$dat['cantidad'];}}</div>
                <div class="column">{{$dat['precio'];}}$</div>
                <div class="column"><a href="/editar-servicio/{{$dat['id'];}}/edit"> <img class="modificar" class="boton" src="img/modificar.png" height="30px" width="30px"> </a> </div>
                <div class="column"><img class="eliminar" src="img/eliminar.png" height="30px" width="30px"></div>
            </div>
        <hr>
            @endforeach
        </div>
        <br><br>
     </section> <br><br>
</section>

@endsection
