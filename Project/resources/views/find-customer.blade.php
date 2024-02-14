@extends('layouts.layout')
@section('header-i')
@endsection

@section('content')
    <section class="flex">
        <section class="container-card-cat">
            <div class="col3">
                <h2 class="bc-titulo">Busqueda de clientes</h2>
                <div class="buscar">
                    <input type="text" placeholder="Buscar" required />
              
                    <div class="btn">
                      <img src="img/lupa.png" height="20px" width="20px" style="margin-bottom: 1px;">
                    </div>
                </div>
                
                <h2 class="titulo2">Clientes</h2>
                <div class="datos">
                
        <div class="table">
            @foreach($datos_clientes as $dat)
                @foreach($datos_lineas as $data)
                    <div class="row">
                        <div class="columnf"><img src="img/user.png" height="40px" width="40px"></div>
                        <div class="columnf">{{$dat['nombre']}}</div>
                        <div class="columnf">{{$dat['apellido']}}</div>
                        <div class="columnf">{{$data['codigo']}}{{$data['numero']}}</div>
                        <div class="columnf"> </div>
                        <div class="columnf"><a href="/porfile-customer"> <img class="visualizar" class="boton" src="img/ver.png" height="30px" width="30px"> </a> </div>
                        <div class="columnf"><a href="/personal-statistics"> <img class="estadistica" class="boton" src="icon/grafico-de-barras.png" height="30px" width="30px"> </a> </div>
                        <div class="columnf"><a href="/change-porfile-customer"> <img class="modificar" class="boton" src="img/modificar.png" height="30px" width="30px"> </a> </div>
                        <div class="columnf"><a href="/añadir-linea/{{$dat['cedula'];}}"><img class="agregar" src="img/mas.PNG" height="30px" width="30px" class="boton"> </a>  </a> </div>
                        <div class="columnf"><img class="eliminar" src="img/eliminar.png" height="30px" width="30px"> </div>
                    </div>
                    <hr>
                 @endforeach
            @endforeach
        </div>

    </div>
        </section><br>
    </section>
@endsection