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
        
        @foreach($datos as $dat)
        <div class="table">
            <div class="row">
                <div class="columnf"><img src="img/user.png" height="40px" width="40px"></div>
                <div class="columnf">{{$dat['nombre']}}</div>
                <div class="columnf">{{$dat['apellido']}}</div>
                <div class="columnf">04165373841</div>
                <div class="columnf"> </div>
                <div class="columnf"><a href="/porfile-customer"> <img class="visualizar" class="boton" src="img/ver.png" height="30px" width="30px"> </a> </div>
                <div class="columnf"><a href="/personal-statistics"> <img class="estadistica" class="boton" src="icon/grafico-de-barras.png" height="30px" width="30px"> </a> </div>
                <div class="columnf"><a href="/change-porfile-customer"> <img class="modificar" class="boton" src="img/modificar.png" height="30px" width="30px"> </a> </div>
                <div class="columnf"><a href="addline-customer"><img class="agregar" src="img/mas.PNG" height="30px" width="30px" class="boton"> </a>  </a> </div>
                <div class="columnf"><img class="eliminar" src="img/eliminar.png" height="30px" width="30px"> </div>
            </div>
            <hr>
            <div class="row">
                <div class="columnf"><img src="img/user.png" height="40px" width="40px"></div>
                <div class="columnf">Andres</div>
                <div class="columnf">Medina</div>
                <div class="columnf">04165373841</div>
                <div class="columnf"> </div>
                <div class="columnf"><a href="/porfile-customer"> <img class="visualizar" class="boton" src="img/ver.png" height="30px" width="30px"> </a> </div>
                <div class="columnf"><a href="/personal-statistics"> <img class="estadistica" class="boton" src="icon/grafico-de-barras.png" height="30px" width="30px"> </a> </div>
                <div class="columnf"><a href="/change-porfile-customer"> <img class="modificar" class="boton" src="img/modificar.png" height="30px" width="30px"> </a> </div>
                <div class="columnf"><a href="addline-customer"><img class="agregar" src="img/mas.PNG" height="30px" width="30px" class="boton"> </a>  </a> </div>
                <div class="columnf"><img class="eliminar" src="img/eliminar.png" height="30px" width="30px"> </div>
            </div>
            <hr>
            <div class="row">
                <div class="columnf"><img src="img/user.png" height="40px" width="40px"></div>
                <div class="columnf">Lidia</div>
                <div class="columnf">Suarez</div>
                <div class="columnf">04125304841</div>
                <div class="columnf"> </div>
                <div class="columnf"><a href="/porfile-customer"> <img class="visualizar" class="boton" src="img/ver.png" height="30px" width="30px"> </a> </div>
                <div class="columnf"><a href="/personal-statistics"> <img class="estadistica" class="boton" src="icon/grafico-de-barras.png" height="30px" width="30px"> </a> </div>
                <div class="columnf"><a href="/change-porfile-customer"> <img class="modificar" class="boton" src="img/modificar.png" height="30px" width="30px"> </a> </div>
                <div class="columnf"><a href="addline-customer"><img class="agregar" src="img/mas.PNG" height="30px" width="30px" class="boton"> </a>  </a> </div>
                <div class="columnf"><img class="eliminar" src="img/eliminar.png" height="30px" width="30px"> </div>
            </div>
            <hr>
            <div class="row">
                <div class="columnf"><img src="img/user.png" height="40px" width="40px"></div>
                <div class="columnf">Lidia</div>
                <div class="columnf">Suarez</div>
                <div class="columnf">04125304841</div>
                <div class="columnf"> </div>
                <div class="columnf"><a href="/porfile-customer"> <img class="visualizar" class="boton" src="img/ver.png" height="30px" width="30px"> </a> </div>
                <div class="columnf"><a href="/personal-statistics"> <img class="estadistica" class="boton" src="icon/grafico-de-barras.png" height="30px" width="30px"> </a> </div>
                <div class="columnf"><a href="/change-porfile-customer"> <img class="modificar" class="boton" src="img/modificar.png" height="30px" width="30px"> </a> </div>
                <div class="columnf"><a href="addline-customer"><img class="agregar" src="img/mas.PNG" height="30px" width="30px" class="boton"> </a>  </a> </div>
                <div class="columnf"><img class="eliminar" src="img/eliminar.png" height="30px" width="30px"> </div>
            </div>
            <hr>
            <div class="row">
                <div class="columnf"><img src="img/user.png" height="40px" width="40px"></div>
                <div class="columnf">Lidia</div>
                <div class="columnf">Suarez</div>
                <div class="columnf">04125304841</div>
                <div class="columnf"> </div>
                <div class="columnf"><a href="/porfile-customer"> <img class="visualizar" class="boton" src="img/ver.png" height="30px" width="30px"> </a> </div>
                <div class="columnf"><a href="/personal-statistics"> <img class="estadistica" class="boton" src="icon/grafico-de-barras.png" height="30px" width="30px"> </a> </div>
                <div class="columnf"><a href="/change-porfile-customer"> <img class="modificar" class="boton" src="img/modificar.png" height="30px" width="30px"> </a> </div>
                <div class="columnf"><a href="addline-customer"><img class="agregar" src="img/mas.PNG" height="30px" width="30px" class="boton"> </a>  </a> </div>
                <div class="columnf"><img class="eliminar" src="img/eliminar.png" height="30px" width="30px"> </div>
            </div>
        </div>

    </div>
        </section><br>
    </section>
    @endforeach
@endsection