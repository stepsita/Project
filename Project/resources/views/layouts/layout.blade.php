<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title> Index steyla </title>

        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
        <link rel="icon" href="{{ asset('/img/cellphone.png')}}">
          <!-- Link Swiper's CSS -->
        <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css')}}" />

        <!-- Link de pagina de iconos-->
        <link href="{{ asset('https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css')}}" rel='stylesheet'>
        <link rel="canonical" href="{{ asset('https://getbootstrap.com/docs/5.3/examples/pricing/')}}">
        <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/@docsearch/css@3')}}">
        
        
    </head>
    <body>
        @section('sidebar') <!-- para extender el codigo--> 
            <nav class="sidebar close">
                <header>
                    <div class="text logo">
                        <span class="name">Menú</span>
                        <span class="profe">opciones</span>
                    </div>
                    <i class="toggle"><img src="{{ asset('icon/menu-regular-24.png')}}" alt=""></i>
                </header>
                <div class="menu-bar">
                    <div class="menu">
                        <ul class="menu-links">
                        <li class="nav-link">
                            <a href="/catalogo">
                                <i class=" icon"><img src="{{ asset('icon/archive-regular-24.png')}}" alt=""></i>
                                <span class="text nav-text">Catálogo</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a href="/crear-clientes">
                                <i class="bx  icon"><img src=" {{asset('icon/agus.PNG')}}" style="width: 32px;"  alt=""></i>
                                <span class="text nav-text">Agregar Cliente</span>
                            </a>
                        </li>
                            <li class="nav-link">
                                <a href="/buscar-clientes">
                                    <i class="bx  icon"><img src="{{ asset('icon/search-regular-24.png')}}" alt=""></i>
                                    <span class="text nav-text">Buscar Cliente</span>
                                </a>
                            </li>

                            <li class="nav-link">
                            <a href="/estadisticas">
                                <i class="icon"><img src="{{ asset('icon/bar-chart-alt-2-regular-24.png')}}" alt=""></i>
                                <span class="text nav-text">Estadísticas</span>
                            </a>
                        </li>
                        @if(Auth::user() && Auth::user()->tipo_user==2) 
                            <li class="nav-link">
                                <a href="/crear-operador">
                                    <i class="icon"><img src="{{ asset('icon/agus.PNG')}}" style="width: 32px;" alt=""></i>
                                    <span class="text nav-text">Agregar Operador</span>
                                </a>
                            </li>
                        
                            <li class="nav-link">
                                <a href="/buscar-operador">
                                    <i class="bx  icon"><img src="{{ asset('icon/search-regular-24.png')}}" alt=""></i>
                                    <span class="text nav-text">Buscar Operador</span>
                                </a>
                            </li>
                        @endif
                    </div>

                    <div class="botton-content">
                        <li class="">
                            <a href="">
                                <form method="POST" action="{{ route('cerrar-sesion') }}">
                                    {{ csrf_field() }}
                                    <button type="submit">
                                        <i class="icon"><img src="{{ asset('icon/log-out-regular-24.png')}}" alt=""></i>
                                        <span class="text nav-text">Salir</span>
                                    </button>
                                </form>
                            </a>
                        </li>
                    </div>
                </div>
            </nav>
        @show

        @section('header') 
            <section class="membrete">
                <div class="text">
                    <a href="/home">Steyla</a> 
                </div>
            </section>
        @show
        @section('header-i') 
            <section class="membrete-i">
                <div class="text">
                    Steyla
                </div>
            </section>
        @show

        @yield('content')

        @section('footer')
            <footer class="footer">
                <div class="row">
                    <div class="col" id="icons">
                        <a href="/home"> <img src="{{asset('img/logo.png')}}" class="logo"></a>
                    
                        <br>
                        <a href=""><i class="bx bxl-facebook"></i></a>
                        <a href=""><i class="bx bxl-twitter"></i></a>
                        <a href=""><i class="bx bxl-instagram"></i></a>
                    
                    </div>
                    <div class="col">
                        <h3>Somos</h3>
                        <p> Una empresa que prioriza la atención y el servicio
                            a todos nuestros usuarios. Rompiendo barreras y comunicanco 
                        </p>
                    </div>
                    <div class="col">
                        <h3>Redes</h3>
                        <ul>
                            <li><a href="">Instagram</a></li>
                            <li><a href="">Tiktok</a></li>
                            <li><a href="">Twitter</a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        @show

        <script src="{{ asset('js/script.js')}}"></script>
         <!-- Swiper JS -->
         <script src="{{ asset('js/swiper-bundle.min.js')}}"></script>
          <!-- Initialize Swiper -->
        <script>
          var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            loop: true,
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
          });
        </script>

    </body>

</html>    