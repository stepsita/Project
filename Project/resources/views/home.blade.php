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
            <p>• Usuario</p>
            <p>• Operador</p>
            <img src="img/search.png" width="25%" height="25%">
          </div>
         

          <div class="box red">
            <h2>Catálogo </h2>
            <p>Planes y Servicios de Steyla, con todas las especifícaciones</p>
            <img src="img/bullet.png" width="23%" height="23%">
          </div>
        
          <div class="box box-down blue">
            <h2>Agregar</h2>
            <p>• Usuario</p>
            <p>• Operador</p>
            <img src="img/agregar-usuario.png" width="25%" height="25%">
          </div>
          
        </div>
        <div class="row2-container">
          <div class="box orange">
            <h2>Estadísticas</h2>
            <p>• Personales</p>
            <p>• Generales</p>
            <img src="img/statistics.png" width="25%" height="25%">
          </div>
         
        </div>
       
            <hr class="featurette-divider"> <br>
            <h2>Bienvenido {{Auth::user()->nombre}} </h2>
            <div class="container-texto">
                <h1 >Servicios steyla</h1><br>
                <p >Disponibles para líneas móviles e internet móvil, ideales para mantener conectados a los miembros de tu familia, así como a los empleados de tu empresa, emprendimiento o negocio.</p>
                <div class="container-number">
                  <h1> +300</h1> <img src="img/economico.png" width="70px" height="70px">
                 
                </div>
                <div class="text-number" style="margin-bottom: 10px;">
                  <h4> Vendidos</h4>
                </div>
            </div>
           
            
@endsection
