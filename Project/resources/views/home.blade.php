@extends('layouts.layout')
@section('header-i')
@endsection

@section('content')
     <!-- Estructura de la pagina-->
     <section class="main swiper mySwiper" style="margin-left: 5%;">
            <div class="wrapper swiper-wrapper">
              <div class="slide swiper-slide">
                <img src="img/IMG_6087.JPG" alt="" class="image" />
                <div class="image-data">
                  <span class="text">Steyla</span>
                  <h2>
                    Trabajamos por su<br />
                    Conexión
                  </h2>
                  
                </div>
              </div>
              <div class="slide swiper-slide">
                <img src="img/IMG_6085.JPG" alt="" class="image" />
                <div class="image-data">
                  <span class="text">Steyla</span>
                  <h2>
                    Unidos por<br />
                    la comunicación
                  </h2>
                
                </div>
              </div>
              <div class="slide swiper-slide">
                <img src="img/IMG_6086.JPG" alt="" class="image" />
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

        <br> <hr class="featurette-divider">
        <div class="container-texto">
          <h2>Bienvenid@ {{$operador->nombre}} - 
          @if ($operador->tipo_user==1)
            Operador
          @endif
          @if ($operador->tipo_user==2)
            Administrador
          @endif
          </h2>
        </div>
        <div class="row1-container" >
          <div class="box box-down cyan">
            <h2>Búsqueda</h2>
           <a href=""></a> <p>• Cliente</p>
           @if ($operador->tipo_user==2)
           <p>• Operador</p>
         @endif
            <img src="img/search.png" width="25%" height="25%">
          </div>
         

          <div class="box red">
            <h2>Catálogo </h2>
            <p>Planes y Servicios de Steyla, con todas las especifícaciones</p>
            <img src="img/bullet.png" width="23%" height="23%">
          </div>
        
          <div class="box box-down blue">
            <h2>Agregar</h2>
            <p>• Cliente</p>
            @if ($operador->tipo_user==2)
              <p>• Operador</p>
            @endif
            <img src="img/agregar-usuario.png" width="25%" height="25%">
          </div>
          
        </div>
        <div class="row2-container">
          <div class="box orange">
            <h2>Estadísticas</h2>
            <p>• Generales</p>
            <img src="img/statistics.png" width="25%" height="25%">
          </div>
         
        </div>
       
            <hr class="featurette-divider"> <br>
           
           
            
@endsection
