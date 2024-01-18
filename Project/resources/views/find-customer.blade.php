@extends('layouts.layout')


@section('content')
<section class="container-card-usu">
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

                    <table>
                        <tr>
                            <td rowspan="2"><img src="img/user.png" height="40px" width="40px"></td>
                            <td >Andres</td>
                            <td>Franco</td>
                            <td>Lineas</td>
                            <td rowspan="2"> </td>
                            <td rowspan="2"> <a href="/porfile-customer"> <img class="visualizar" class="boton" src="img/ver.png" height="30px" width="30px"> </a></td>
                            <td rowspan="2"> <a href="/personal-statistics"> <img class="estadistica" class="boton" src="icon/grafico-de-barras.png" height="30px" width="30px"> </a></td>
                            <td rowspan="2"> <a href="/change-porfile-customer"> <img class="modificar" class="boton" src="img/modificar.png" height="30px" width="30px"> </a> </td>
                            <td rowspan="2"> <a href="addline-customer"><img class="agregar" src="img/mas.PNG" height="30px" width="30px" class="boton"> </a> </td>
                            <td rowspan="2"> <img class="eliminar" src="img/eliminar.png" height="30px" width="30px"> </td>
                        </tr>
                        <tr>
                            <td>31777346</td>
                            <td></td>
                            <td>04165373841</td>
                        </tr>
                    </table>
            <hr>
                    <table>
                        <tr>
                            <td rowspan="2"><img src="img/user.png" height="40px" width="40px"></td>
                            <td >Andres</td>
                            <td>Franco</td>
                            <td>Lineas</td>
                            <td rowspan="2"> </td>
                            <td rowspan="2"> <a href="/porfile-customer"> <img class="visualizar" class="boton" src="img/ver.png" height="30px" width="30px"> </a></td>
                            <td rowspan="2"> <a href="/personal-statistics"> <img class="estadistica" class="boton" src="icon/grafico-de-barras.png" height="30px" width="30px"> </a></td>
                            <td rowspan="2"> <a href="/change-porfile-customer"> <img class="modificar" class="boton" src="img/modificar.png" height="30px" width="30px"> </a> </td>
                            <td rowspan="2"> <a href="addline-customer"><img class="agregar" src="img/mas.PNG" height="30px" width="30px" class="boton"> </a> </td>
                            <td rowspan="2"> <img class="eliminar" src="img/eliminar.png" height="30px" width="30px"> </td>
                        </tr>
                        <tr>
                            <td>31777346</td>
                            <td></td>
                            <td>04164630501</td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </section><br>
@endsection