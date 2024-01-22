@extends('layouts.layout')
@section('header-i')
@endsection

@section('content')
    <div class="container-barner" style="background-image: url(https://img.freepik.com/foto-gratis/composicion-concepto-redes-sociales_23-2150169152.jpg?w=360&t=st=1705590132~exp=1705590732~hmac=96904584cbf7f99c9c046027cfdc0eef8dd0060df0182d4f318865c761eae958);"> <!-- Container barner info personal--> 
        <div class="info-barner">
            <div class="cont-barner" style="padding-left: 5%;">
                <h1> Nombre de Usuario</h1>
                <p> Línea Pre-Pago </p> <h2> 04116080582</h2>
                <p> Estatus: Activa </p>
                <p> Plan: nombre 123</p>
            </div>
            <div class="cont-barner" style="text-align: right; padding-right: 5%;">
                <h1> Saldo: BS 168, 11</h1>
                <p> Renta mensual: BS 204, 26</p>
                <p> Fecha de Pago: 23 c/mes</p>
            </div>
        </div>
    </div>
    <div class="cont-circular">
        <div class="circular-pro" id="c1">
            <h1 class="progre-value" > 
                30.54 <p>Gigas </p>
            </h1>
            <br>
        </div>
        <div class="circular-pro" id="c2">
            <h1 class="progre-value"> 
                30.54 <p>Mensajes </p>
            </h1>
            <br>
        </div>
        <div class="circular-pro" id="c3">
            <h1 class="progre-value"> 
                30.54 <p>Minutos </p>
            </h1>
            <br>
        </div>
    </div>
    
    <div class="container-barner"   style="background-color: #e8e9e8;">

    </div>
    <div class="contenedor-card" >
        <div class="card-vacia">
            <h1> Monto Total </h1>
            <p>
                Bs. 300
            </p>
        </div>
        <div class="card-vacia">
            <h1> Recargas</h1>
            <p>
                4
            </p>
        </div>
    </div>
    <div class="contenedor-card" style="margin-top:10px;">
        <div class="card-p"  id="card-claro">
            <div class="card-p1" style="padding-top: 5%;" id="card-oscuro">
                <h1> Renta del plan </h1>
                <p>
                    Bs. 204, 26
                </p>
                <p style="font-size: 15px;"> mensual </p>
            </div>
            <h1 style="color: rgb(3, 95, 26);"> Plan actual:</h1>
            <p style="color: rgb(1, 46, 12);"> Plan intermedio</p>
        </div>
        <div class="card-p"  id="card-claro">
            <div class="card-p1" style="padding-top: 5%;" id="card-oscuro">
                <h1> Renta Total</h1>
            <p>
                Bs. 204,26
            </p>
                <p style="font-size: 15px;"> mensual </p>
            </div>
            <h1 style="color: rgb(3, 95, 26);"> Fecha de pago:</h1>
            <p style="color: rgb(1, 46, 12);"> 23 de cada mes</p>
        </div>
    </div>

    
    <br>
@endsection