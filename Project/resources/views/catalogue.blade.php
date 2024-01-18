@extends('layouts.layout')

@section('content')
<section class="container-card-usu">
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
                     
                <div class="datos"> <br>
                    <table>
                        <tr>
                            <td style="width: 200px;">Plan básico:</td>
                            <td style="width: 170px;">200 min</td>
                            <td style="width: 170px;">400 sms</td>
                            <td style="width: 170px;">4 gb</td>
                            <td style="width: 170px;">5.99$</td>
                            <td style="width: 150px;"> </td>
                            <td style="width: 120px;"> <a href="/form-planes-change"> <img class="modificar" class="boton" src="img/modificar.png" height="30px" width="30px"> </a> </td>
                            <td style="width: 80px;"> <img class="eliminar" src="img/eliminar.png" height="30px" width="30px"> </td>
                        </tr>
                    </table>
            <hr>
                    <table>
                        <tr>
                            <td style="width: 200px;">Plan intermedio:</td>
                            <td style="width: 170px;">200 min</td>
                            <td style="width: 170px;">400 SMS</td>
                            <td style="width: 170px;">4 GB</td>
                            <td style="width: 170px;">5.99$</td>
                            <td style="width: 150px;"> </td>
                            <td style="width: 120px;"> <a href="/form-planes-change"> <img class="modificar" class="boton" src="img/modificar.png" height="30px" width="30px"> </a> </td>
                            <td style="width: 80px;"> <img class="eliminar" src="img/eliminar.png" height="30px" width="30px"> </td>
                        </tr>
                    </table>
            <hr>
            <table>
                <tr>
                    <td style="width: 200px;">Llamadas extras:</td>
                    <td style="width: 170px;">200 min</td>
                    <td style="width: 200px;">De larga distancia </td>
                    <td style="width: 170px;">3.99$</td>
                    <td style="width: 100px;"> </td>
                    <td style="width: 120px;"> <a href="/form-servicios-change"> <img class="modificar" class="boton" src="img/modificar.png" height="30px" width="30px"> </a> </td>
                            <td style="width: 80px;"> <img class="eliminar" src="img/eliminar.png" height="30px" width="30px"> </td>
                </tr>
            </table>
            <hr>
            <table>
                <tr>
                    <td style="width: 200px;">Mensajes extras:</td>
                    <td style="width: 170px;">800 SMS</td>
                    <td style="width: 200px;">De larga distancia </td>
                    <td style="width: 170px;">2.99$</td>
                    <td style="width: 100px;"> </td>
                    <td style="width: 120px;"> <a href="/form-servicios-change"> <img class="modificar" class="boton" src="img/modificar.png" height="30px" width="30px"> </a> </td>
                            <td style="width: 80px;"> <img class="eliminar" src="img/eliminar.png" height="30px" width="30px"> </td>
                </tr>
            </table>

            <hr>
            <table>
                <tr>
                    <td style="width: 200px;">Datos extras:</td>
                    <td style="width: 170px;">25 GB</td>
                    <td style="width: 200px;">Cancela lo consumido </td>
                    <td style="width: 170px;">4.99$</td>
                    <td style="width: 100px;"> </td>
                    <td style="width: 120px;"> <a href="/form-servicios-change"> <img class="modificar" class="boton" src="img/modificar.png" height="30px" width="30px"> </a> </td>
                            <td style="width: 80px;"> <img class="eliminar" src="img/eliminar.png" height="30px" width="30px"> </td>
                </tr>
            </table>

                </div>
            </div>
        </div>
    </section><br>
@endsection