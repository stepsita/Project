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
            @foreach($datos_planes as $dat)
            <h2 class="bc-titulo">Planes y servicios</h2>
            <div class="row">
                <div class="column">{{$dat['nombre'];}}</div>
                <div class="column">{{$dat['min'];}}</div>
                <div class="column">{{$dat['sms'];}}</div>
                <div class="column">{{$dat['gb'];}}</div>
                <div class="column">{{$dat['precio'];}}$</div>
                <div class="column"><a href="/form-planes-change"> <img class="modificar" class="boton" src="img/modificar.png" height="30px" width="30px"> </a> </div>
                <div class="column"><img class="eliminar" src="img/eliminar.png" height="30px" width="30px"></div>
            </div>
        <hr>
            @endforeach
            <br>
            <h2 class="bc-titulo">Servicios</h2>
            <br>
            @foreach($datos_servicios as $dat)
            <div class="row">
                <div class="column">{{$dat['nombre'];}}</div>
                <div class="column">{{$dat['tipo'];}}</div>
                <div class="column">{{$dat['cantidad'];}}</div>
                <div class="column">{{$dat['precio'];}}$</div>
                <div class="column"><a href="/form-planes-change"> <img class="modificar" class="boton" src="img/modificar.png" height="30px" width="30px"> </a> </div>
                <div class="column"><img class="eliminar" src="img/eliminar.png" height="30px" width="30px"></div>
            </div>
        <hr>
            @endforeach
        </div>
        <br><br>
     </section> <br><br>
</section>
@endsection