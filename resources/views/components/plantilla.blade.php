<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Desafyo Fitness</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="icon" type="image/png" href="{{ asset('website/img/LogofitnessBlancoYRojo.svg') }} ">
    <!-- Favicon -->
    {{-- <link href="{{ asset('website/img/favicon.ico') }} " rel="icon"> --}}

    <!-- Google Web Fonts -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Oswald:wght@600&display=swap" rel="stylesheet"> -->

    <!-- Icon Font Stylesheet -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"> -->

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('website/lib/animate/animate.min.css') }} " rel="stylesheet">
    <link href="{{ asset('website/lib/owlcarousel/assets/owl.carousel.min.css') }} " rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('website/css/bootstrap.min.css') }} " rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('website/css/style.css') }} " rel="stylesheet">
</head>

<style>
    body{
        /* margin-top: 106px; */
    }
    #menutop
    {
        position: fixed;
    top: 0;
    width: 100%;
    transition: top 0.4s;
    z-index: 9999;
    height: 5.2rem;
    transition: 1s;
    /* position: fixed;
    top: 0;
    width: 100%;
    transition: top 0.4s;
    z-index: 9999; */

    }
    @media (max-width: 973px)
    {
        #menutop > div
        {
            background: rgba(0, 0, 0, 0.9);
        }
    }

    .downfix {
    opacity: 0;
    transition: 3s;

    }

    .desfixeadodiv {
    transition: 1.5s;
/*
    position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    padding-top: .5rem;
    padding-bottom: .5rem; */
    }

    .espacio
    {
    margin-top:5rem;
    }
</style>

<body>
    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
    <!-- Spinner End -->


    <!-- Navbar Start -->

    {{-- <nav class="navbar navbar-expand-lg bg-secondary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s"> --}}
    <nav id="menutop" class="fixeadodiv navbar navbar-expand-lg bg-secondary navbar-dark sticky-top py-lg-0 px-lg-5  " >
        <a href={{ route('home') }} class="navbar-brand ms-4 ms-lg-0">
            <h1 class="mb-0 text-primary text-uppercase titulonavar" >
                    <img class="nav-item logoMenu" src={{ asset("website/img/LogofitnessBlancoYRojo.svg") }} alt="">
                    <img src="{{ asset('website/img/PesaCa.gif') }}" alt="" width="25px" style="margin-top: -10px;">
                    {{-- <i class="fa-solid fa-dumbbell"> </i>  --}}
                    Desafyo Fitness</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href={{ route('home') }} class="nav-item nav-link active">Inicio</a>
                <a href={{ route('nosotros') }} class="nav-item nav-link">Nosotros</a>
                {{-- <a href={{ route('servicios') }} class="nav-item nav-link">Servicios</a> --}}
                <a href={{ route('galeria') }} class="nav-item nav-link">Galeria</a>
                {{-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="price.html" class="dropdown-item">Pricing Plan</a>
                        <a href="team.html" class="dropdown-item">Our Barber</a>
                        <a href="open.html" class="dropdown-item">Working Hours</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div> --}}
                <a href={{ route('contactanos') }} class="nav-item nav-link">Contactanos</a>
            </div>
            <a href="{{ route('contactanos') }}" class="btn btn-primary rounded-0 py-2 px-lg-4 d-none d-lg-block">Integrate<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>

    <!-- Navbar End -->
    <div class="espacio">

    </div>

        <!-- Spinner Start -->
    <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        {{-- <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status"> --}}

            <span class="sr-only"><img src="{{ asset('website/img/Pesas-Minion.gif') }}" alt="" style="margin-left: -5%; width: 200px;"><h1>Cargando...</h1></span>
        {{-- </div> --}}
    </div>
    <!-- Spinner End -->

    {{-- Contenido --}}
        {{ $slot }}
    {{-- End Contenido --}}


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">

        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <a href="https://goo.gl/maps/3chuytDvqNdE3HyZ7">
                            <i class="fa fa-map-marker-alt text-primary me-3"></i>13015 Dessau rd suite #202 Austin texas 78754
                        </a>
                    </div>
                    <div class="col-md-6 col-sm-12 text-center text-md-end">
                        <p class="text-white text-uppercase mb-4 animated slideInDown"><i class="fa-brands fa-whatsapp"></i> +1 (737) 247-9329</p>
                    </div>
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Desafyo Fitness</a>, Todos los derechos reservados.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Diseñado por <a class="border-bottom" href="https://www.facebook.com/MauPeser">MauPeser<i class="fa-solid fa-up"></i></a>
                        <i class="fa-sharp fa-solid fa-up " style="size: 12px; color: white"></i>
                        <i class="fa-solid fa-up"></i>
                        <!--
                        <br>Distributed By: <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                    -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up w-100" ></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"script>
    // <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src={{ asset("website/lib/wow/wow.min.js") }}></script>
    <script src={{ asset("website/lib/easing/easing.min.js") }}></script>
    <script src='{{ asset("website/lib/waypoints/waypoints.min.js") }}'></script>
    <script src='{{ asset("website/lib/owlcarousel/owl.carousel.min.js") }}'></script>

    {{-- Font Awesome iconos--}}
    <link href="{{ asset('website/fontawesome-free-6.4.0-web/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('website/fontawesome-free-6.4.0-web/css/brands.css') }}" rel="stylesheet">
    <link href="{{ asset('website/fontawesome-free-6.4.0-web/css/solid.css') }}" rel="stylesheet">
    {{-- EndFont Awesome iconos--}}

    <!-- Template Javascript -->
    <script src={{ asset("website/js/main.js") }}></script>

    {{-- <script>
        let prevScrollpos = window.pageYOffset;
    const navbar = document.querySelector(".menutop");

    window.onscroll = function() {
      let currentScrollPos = window.pageYOffset;
      if (prevScrollpos > currentScrollPos) {
        navbar.style.top = "0";
      } else {
        navbar.style.top = "-80px";
      }
      prevScrollpos = currentScrollPos;
    }


    </script> --}}


    {{-- <script>
        var prevScrollpos = window.pageYOffset;
        $(window).scroll(function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            $("#menutop").css("top", "0");
            $("#menutop").css("position", "relative");
        } else {
            $("#menutop").css("top", "-120px");
            $("#menutop").css("position", "fixed");
        }
        prevScrollpos = currentScrollPos;
        });

    </script> --}}

    <script>
        var prevScrollpos = window.pageYOffset;
$(window).scroll(function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    $("#menutop").css("top", "0");
  } else {
    $("#menutop").css("top", "-120px");
  }
  prevScrollpos = currentScrollPos;
});

    </script>

<script>
    var icons = ['icon1', 'icon2', 'icon3', 'icon4']; // Array de iconos
    var currentIconIndex = 0; // Índice del icono actual

    function changeIcon(iconIndex) {
        var icon = document.getElementById('icon');
        icon.className = 'icon ' + icons[iconIndex]; // Cambia la clase del icono
    }

    // Cambiar el icono según el porcentaje de desplazamiento del scroll
    window.addEventListener('scroll', function() {
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        var windowHeight = window.innerHeight || document.documentElement.clientHeight;
        var documentHeight = document.documentElement.scrollHeight;
        var scrollPercentage = (scrollTop / (documentHeight - windowHeight)) * 100;

        if (scrollPercentage >= 20 && scrollPercentage < 40) {
            changeIcon(0); // Icono 1
        } else if (scrollPercentage >= 40 && scrollPercentage < 60) {
            changeIcon(1); // Icono 2
        } else if (scrollPercentage >= 60 && scrollPercentage < 80) {
            changeIcon(2); // Icono 3
        } else if (scrollPercentage >= 80 && scrollPercentage <= 100) {
            changeIcon(3); // Icono 4
        }
    });
</script>
</body>

</html>
