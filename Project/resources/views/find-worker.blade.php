@extends('layouts.layout')
@section('header-i')
@endsection

@section('content')
<section class="container-card-cat">
            <div class="col3">
                
                <h2 class="bc-titulo">Busqueda de operadores</h2>

                <div class="buscar">
                    <input type="text" placeholder="Buscar" required />
              
                    <div class="btn">
                      <img src="img/lupa.png" height="20px" width="20px" style="margin-bottom: 1px;">
                    </div>
                </div>
                
                <h2 class="titulo2">Operadores</h2>
                <div class="datos">

                    <table>
                        <tr>
                            <td rowspan="2"><img src="img/user.png" height="40px" width="40px"></td>
                            <td >Andres</td>
                            <td>Franco</td>
                            <td>31777346</td>
                            <td rowspan="2"> </td>
                            <td rowspan="2" > <a href="/porfile-worker"> <img class="visualizar" class="boton" src="img/ver.png" height="30px" width="30px"> </a> </td>
                            <td rowspan="2"> <a href="/change-porfile-worker"> <img class="modificar" class="boton" src="img/modificar.png" height="30px" width="30px"> </a>  </td>
                            <td rowspan="2"> <img class="eliminar" src="img/eliminar.png" height="30px" width="30px"> </td>
                        </tr>
                    </table>
                    <hr>
                    <table>
                        <tr>
                            <td rowspan="2"><img src="img/user.png" height="40px" width="40px"></td>
                            <td >Ana</td>
                            <td>Lopez</td>
                            <td>33777546</td>
                            <td rowspan="2"> </td>
                            <td rowspan="2" > <a href="/porfile-worker"> <img class="visualizar" class="boton" src="img/ver.png" height="30px" width="30px"> </a> </td>
                            <td rowspan="2"> <a href="/change-porfile-worker"> <img class="modificar" class="boton" src="img/modificar.png" height="30px" width="30px"> </a>  </td>
                            <td rowspan="2"> <img class="eliminar" src="img/eliminar.png" height="30px" width="30px"> </td>
                        </tr>
                    </table>
                    <hr>
                    <table>
                        <tr>
                            <td rowspan="2"><img src="img/user.png" height="40px" width="40px"></td>
                            <td >Juan</td>
                            <td>Rodriguez</td>
                        <td>23677346</td>
                        <td rowspan="2"> </td>
                        <td rowspan="2" > <a href="/porfile-worker"> <img class="visualizar" class="boton" src="img/ver.png" height="30px" width="30px"> </a> </td>
                            <td rowspan="2"> <a href="/change-porfile-worker"> <img class="modificar" class="boton" src="img/modificar.png" height="30px" width="30px"> </a>  </td>
                            <td rowspan="2"> <img class="eliminar" src="img/eliminar.png" height="30px" width="30px"> </td>
                        </tr>
                    </table>
                </div>
            </div>
        </section><br>
@endsection