@extends('layouts.layout')

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
        <div class="container-texto" >
         
            <h1 >Planes steyla</h1><br>
            <p >Disponibles para líneas móviles e internet móvil, ideales para mantener conectados a los miembros de tu familia, así como a los empleados de tu empresa, emprendimiento o negocio.</p>
            <div class="container-number">
              <h1> +200</h1> <img src="img/economico.png" width="70px" height="70px">
             
            </div>
            <div class="text-number">
              <h4> Vendidos</h4>
            </div>
        </div>
       
        <h1>100</h1>
        <main >
            <div class="container">
              <div class="col">
                <div class="card">
                    <div class="content">
                      <div class="title">Básico</div>
                      <div class="price">$5.99</div>
                      <div class="description">200 minutos</div>
                      <div class="description">400 SMS</div>
                      <div class="description">4 GB</div>
                    </div>
                   
                      
                </div>
              </div>
              <div class="col">
                <div class="card">
                    <div class="content">
                        <div class="title">Intermedio</div>
                        <div class="price">$8.99</div>
                        <div class="description">400 minutos</div>
                        <div class="description">800 SMS</div>
                        <div class="description">10 GB</div>
                    </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                    <div class="content">
                        <div class="title">Premium</div>
                        <div class="price">$10.99</div>
                        <div class="description">600 minutos</div>
                        <div class="description">1.200 SMS</div>
                        <div class="description">25 GB</div>
                    </div>
                </div>
              </div>
            </div> <br>
        </main>
        
            <hr class="featurette-divider"> <br>
        
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
            <div class="container">
                <div class="col">
                  <div class="card-s">
                    <div class="content">
                        <div class="title-s">Llamadas extras</div>
                        <div class="price-s">$3.99</div>
                        <div class="description">200 minutos</div>
                        <div class="description">Llamadas de larga distancia internacional</div>
                    </div>
                    
                </div>
              </div>
                <div class="col">
                    <div class="card-s">
                      <div class="content">
                          <div class="title-s">Mensajes extras</div>
                          <div class="price-s">$2.99</div>
                          <div class="description">800 SMS</div>
                          <div class="description">Mensajes de larga distancia internacional</div>
                      </div>
                  </div>
                </div>
                
              

                <div class="col">
                    <div class="card-s">
                      <div class="content">
                          <div class="title-s">Datos extras</div>
                          <div class="price-s">$4.99</div>
                          <div class="description">Limite de 25 GB</div>
                          <div class="description">Cancela sólo lo que consumes en megabytes</div>
                      </div>
                  </div>
                </div>
            </div>
            <br><br><br>
@endsection