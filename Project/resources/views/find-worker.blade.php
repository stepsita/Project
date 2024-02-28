@extends('layouts.layout')
@section('header-i')
@endsection

@section('content')
    <section class="flex">
        <section class="container-card-cat">
                <div class="col3">
                    <h2 class="bc-titulo">Búsqueda de operadores</h2>
                    <div class="buscar">
                        <input type="text" placeholder="Buscar" required />
                        <div class="btn">
                        <img src="img/lupa.png" height="20px" width="20px" style="margin-bottom: 1px;">
                        </div>
                    </div>
                </div>
                
                <h2 class="titulo2">Operadores</h2>
                

                <div class="table">
                    @foreach($datos_operadores as $dat)
                    <div class="row">
                        <div class="columnf"><img src="img/user.png" height="40px" width="40px"></div>
                        <div class="columnf">{{$dat['nombre'];}}</div>
                        <div class="columnf">{{$dat['apellido'];}}</div>
                        <div class="columnf">{{$dat['cedula'];}}</div>
                        <div class="columnf"> </div>
                        <div class="columnf"><a href="/operador/{{$dat['id'];}}"> <img class="visualizar" class="boton" src="img/ver.png" height="30px" width="30px"> </a> </div>
                        <div class="columnf"><a href="/editar-operador/{{$dat['id'];}}/edit"> <img class="modificar" class="boton" src="img/modificar.png" height="30px" width="30px"> </a>  </div>
                        <div class="columnf"><a href="/eliminar-operador/{{$dat['id'];}}"><img class="eliminar" src="img/eliminar.png" height="30px" width="30px"> </a> </div>
                    </div>
                    <hr>
                    @endforeach
                </div>

        </section><br>
    </section>
@endsection