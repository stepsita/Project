@extends('layouts.layout')
@section('header-i')
@endsection

@section('content')
<section class="main swiper mySwiper" style="margin-left: 5%;">
        <div class="wrapper swiper-wrapper">
          <div class="slide swiper-slide">
            <img src="img/composicion-concepto-redes-sociales.jpg" alt="" class="image" />
            <div class="image-data">
                <span class="text">Steyla</span>
                <h2>
                  Conéctate, Comunicate <br />
                  Vive
                </h2>
         
            </div>
          </div>
          <div class="slide swiper-slide">
            <img src="img/redes1.jpg" alt="" class="image" />
            <div class="image-data">
                <span class="text">Steyla</span>
                <h2>
                  La mejor opción<br />
                  de comunicación
                </h2>
            </div>
          </div>
          <div class="slide swiper-slide">
            <img src="img/slider.jpg" alt="" class="image" />
            <div class="image-data">
                <span class="text">Steyla</span>
                <h2>
                  Más que voces, <br />
                  unimos corazones
                </h2>
            </div>
          </div>
        </div>
  
        <div class="swiper-button-next nav-btn"></div>
        <div class="swiper-button-prev nav-btn"></div>
        <div class="swiper-pagination"></div>
      </section>
       


   <div class="contiene-es"><!--Contiene ambas cards de gr[aficas]-->
    <div class="container-es">
        <div class="skill-box">
            <h1>VENTAS</h1>
        </div>
        <div class="skill-box">
            <span class="title-g">PREMIUM</span>
            <div class="skill-bar">
                <span class="skill-per premiumventa">
                    <span class="tooltip"> 90</span>
                </span>
            </div>
        </div>
        <div class="skill-box">
            <span class="title-g">MEDIO</span>
            <div class="skill-bar">
                <span class="skill-per medioventa">
                    <span class="tooltip"> 50</span>
                </span>
            </div>
        </div>
        <div class="skill-box">
            <span class="title-g">BÁSICO</span>
            <div class="skill-bar">
                <span class="skill-per basicoventa">
                    <span class="tooltip"> 40</span>
                </span>
            </div>
        </div>
    </div>
    <div class="container-es">
        <div class="skill-box">
            <h1>USOS</h1>
        </div>
        <div class="skill-box">
            <span class="title-g">MEDIO</span>
            <div class="skill-bar">
                <span class="skill-per medious">
                    <span class="tooltip"> 100</span>
                </span>
            </div>
        </div>
        <div class="skill-box">
            <span class="title-g">PREMIUM</span>
            <div class="skill-bar">
                <span class="skill-per medio premiumus">
                    <span class="tooltip"> 70</span>
                </span>
            </div>
        </div>
        <div class="skill-box">
            <span class="title-g">BÁSICO</span>
            <div class="skill-bar">
                <span class="skill-per basicous">
                    <span class="tooltip"> 90</span>
                </span>
            </div>
        </div>
    </div>
   </div>
   <div style=" display:flex; flex-direction:  row; max-width: 100%; align-items: center; justify-content: space-around;">
        <!-- Cards de cuentas-->
        <div class="contiene-con">
            <div class="cont-in" id="color1">
                <i class='bx '><img src="icon/check-circle-solid-24.png" height="35px" width="35px"></i>
                <h2>Líneas activas</h2>
                <span class="num" data-val="90">90</span>
            </div>
            <div class="cont-in" id="color2">
                <i class='bx '><img src="icon/no-entry-solid-24.png" height="35px" width="35px"></i>
                <h2>Líneas desactivadas</h2>
                <span class="num" data-val="50">50</span>
            </div>
        </div>
        <!-- Cards de pagos-->
        <div class="contiene-con" style="margin-right: 5%; margin-left: 0;">
            <div class="circular-progress">
                <span class="progress-value">50%
                    <h1 class="title"> Post-pago</h1>
                </span>
            </div>
            <div class="circular-progress">
                <span class="progress-value">50%
                    <h1 class="title"> Pre-pago</h1>
                </span>
            </div>

        </div>
   </div>
    <br>
@endsection