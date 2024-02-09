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
                    Conéctate, Comunicate <br />
                    Vive
                  </h2>
                  
                </div>
              </div>
              <div class="slide swiper-slide">
                <img src="img/IMG_6085.JPG" alt="" class="image" />
                <div class="image-data">
                  <span class="text">Steyla</span>
                  <h2>
                    La mejor opción<br />
                    de comunicación
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
       
       
        <div class="row1-container" >
          <div class="box box-down cyan">
            <h2>Búsqueda</h2>
            <a href="/find-customer"><p>• Usuario</p></a>
            <a href="/find-worker"><p>• Operador</p></a>
            <img src="img/search.png" width="25%" height="25%">
          </div>
        

          <div class="box red">
            <h2>Catálogo</h2>
            <a href="/catalogue"><p>Planes y Servicios de Steyla, con todas las especifícaciones</p></a>
            <img src="img/bullet.png" width="23%" height="23%">
          </div>
        
          <div class="box box-down blue">
            <h2>Agregar</h2>
            <a href="/form-customer-add"><p>• Usuario</p></a>
            <a href="/form-worker-add"><p>• Operador</p></a>
            <img src="img/agregar-usuario.png" width="25%" height="25%">
          </div>
          
        </div>
        <div class="row2-container">
          <div class="box orange">
            <h2>Estadísticas</h2>
            <a href="/personal-statistics"><p>• Personales</p></a>
            <a href="/statistics"><p>• Generales</p></a>
            <img src="img/statistics.png" width="25%" height="25%">
          </div>
         
        </div>
       
    
        <br><br><br>
@endsection