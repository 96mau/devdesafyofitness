<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Desafyo Fitness</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="icon" type="image/png" href="{{ asset('website/img/LogofitnessBlanco.svg') }} ">
    <!-- Favicon -->
    <link href="{{ asset('website/img/favicon.ico') }} " rel="icon">

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

<body>
    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-secondary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="mb-0 text-primary text-uppercase">
                    <img class="nav-item logoMenu" src={{ asset("website/img/LogofitnessRojo.svg") }} alt="">
                <i class="fa fa-cut me-3"></i>Desafyo Fitness</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">Inicio</a>
                <a href="about.html" class="nav-item nav-link">Nosotros</a>
                <a href="service.html" class="nav-item nav-link">Servicios</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="price.html" class="dropdown-item">Pricing Plan</a>
                        <a href="team.html" class="dropdown-item">Our Barber</a>
                        <a href="open.html" class="dropdown-item">Working Hours</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contactanos</a>
            </div>
            <a href="" class="btn btn-primary rounded-0 py-2 px-lg-4 d-none d-lg-block">Appointment<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                        <video class="videoCarrousel" carousel-caption autoplay loop muted>
                          <source src='{{ asset('website/videos/push-ups-39475.webm') }}' type="video/mp4">
                        </video>

                    <!-- <img class="w-100" src="img/carousel-1.jpg" alt="Image"> -->
                    <div class="carousel-caption d-flex align-items-center justify-content-center text-start">
                        <div class="mx-sm-5 px-5" style="max-width: 900px;">
                            <h2 class="display-2 text-white text-uppercase mb-4 animated slideInDown">"Desafía tus límites y alcanza tu máximo potencial con <b>Desaf<b class="text-primary">yo</b>   Fitness</b>"</h2>
                            <h4 class="text-white text-uppercase mb-4 animated slideInDown">
                                <i class="fa fa-map-marker-alt text-primary me-3"></i>13015 Dessau rd suite #202 Austin texas 78754
                            </h4>
                            <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i class="fa fa-phone-alt text-primary me-3"></i>+52 311-476-7890</h4>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src='{{ asset("website/img/Equipo.jpg") }}' alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center text-start">
                        <div class="mx-sm-5 px-5" style="max-width: 900px;">
                            <h5 class="display-5 text-white text-uppercase mb-4 animated slideInDown">
                                "Da el primer paso hacia una versión más saludable y fuerte de ti mismo,
                                se parte del equipo Desafyo Fitness, y disfruta de 4 clases gratis"
                            </h5>
                            <h5 class="d-flex align-items-center justify-content-center mb-4 animated slideInDown">
                                <a href="" class="btn btn-danger"><h2>Integrate</h2></a>
                            </h5>
                            <!-- <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i class="fa fa-map-marker-alt text-primary me-3"></i>Desaau 1</h4>
                            <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i class="fa fa-phone-alt text-primary me-3"></i>+737-000-000</h4> -->
                        </div>
                    </div>

                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid w-80 align-self-end" src={{ asset("website/img/pexels-victor-freitas-2261485.jpg") }} alt="">
                        <div class="w-50 bg-secondary p-5" style="margin-top: -15%;">
                            <h3 class="text-uppercase text-primary mb-3">¡Sé más fuerte!</h3>
                            <h4 class="text-uppercase mb-0">¡No te rindas!</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="d-inline-block bg-secondary text-primary py-1 px-4">Debes saber que...</p>
                    <h1 class="text-uppercase mb-4">Entrenamiento en grupo!</h1>
                    <p>
                        En nuestro gimnasio, ofrecemos una amplia variedad
                        de clases diseñadas para motivarte y desafiarte. Nuestros instructores están altamente
                        capacitados para ayudarte a alcanzar tus objetivos de fitness, ya sea que estés buscando
                        perder peso, mejorar tu fuerza y resistencia, o simplemente mantenerte activo y saludable.
                        Desde clases de alta intensidad hasta entrenamientos más ligeros, tenemos algo para todos. Únete a nuestra comunidad de fitness y descubre cómo
                        el ejercicio en grupo puede hacer que tu entrenamiento sea más motivador, efectivo y divertido.
                    </p>
                    <p class="mb-4">¡Te esperamos en nuestras clases!</p>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <h3 class="text-uppercase mb-3">Desde 2021 si limite de tiempo.</h3>
                            <p class="mb-0">Luchemos por uns vida fitness.</p>
                        </div>
                        <div class="col-md-6">
                            <h3 class="text-uppercase mb-3">Mas de +100 activos</h3>
                            <p class="mb-0">"Con cada día que pasa, somos más integrantes en Desafyo Fitness."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">

                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="d-inline-block bg-secondary text-primary py-1 px-4">Es Importante</p>
                    <h1 class="text-uppercase mb-4">Plan de alimentación!</h1>
                    <p>
                        "La verdadera transformación física comienza desde adentro.
                        Una nutrición adecuada es clave para alcanzar tus objetivos de fitness y llevar una vida sana."


                    </p>
                    <p class="mb-4">
                        En Desafyo Fitness, entendemos lo importante que es la nutrición en cualquier programa de fitness.
                        Es por eso que ofrecemos un plan de alimentación personalizado que se adapta a tus objetivos,
                        preferencias y estilo de vida. Te ayudamos a diseñar un plan de
                        alimentación equilibrado y saludable que te permitirá alcanzar tus objetivos de forma más
                        efectiva y sostenible. Junto con nuestro desafío de fitness, te proporcionamos herramientas
                        para transformar tu cuerpo y tu mente, y vivir una vida más saludable y feliz.
                    </p>
                    <div class="row g-4">
                        <div class="col-md-12">
                            <h3 class="text-uppercase mb-3">"Alimenta tu éxito diario."</h3>
                            <video class="w-100" style="border-radius: 50px; opacity: 0.6; z-index: inherit;" autoplay loop muted controls="false" oncontextmenu="return false;">
                                <source src={{ asset("website/videos/pexels-august-de-richelieu-4296854-3840x2160-50fps.webm") }} type="video/mp4">
                            </video>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid w-75 align-self-end" src={{ asset("website/img/pexels-taryn-elliott-4099231.jpg") }} alt="">
                        <div class="w-50 bg-secondary p-5" style="margin-top: -25%;">
                            <h2 class="text-uppercase text-primary mb-3 text-center">"Salud en casa"</h2>
                            <!--  <h2 class="text-uppercase mb-0">Experience</h2> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Service Start -->
 <!--
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block bg-secondary text-primary py-1 px-4">Services</p>
                <h1 class="text-uppercase">What We Provide</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                        <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <img class="img-fluid" src="img/haircut.png" alt="">
                        </div>
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-3">Haircut</h3>
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam.</p>
                            <span class="text-uppercase text-primary">From $15</span>
                        </div>
                        <a class="btn btn-square" href=""><i class="fa fa-plus text-primary"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                        <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <img class="img-fluid" src="img/beard-trim.png" alt="">
                        </div>
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-3">Beard Trim</h3>
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam.</p>
                            <span class="text-uppercase text-primary">From $15</span>
                        </div>
                        <a class="btn btn-square" href=""><i class="fa fa-plus text-primary"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                        <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <img class="img-fluid" src="img/mans-shave.png" alt="">
                        </div>
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-3">Mans Shave</h3>
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam.</p>
                            <span class="text-uppercase text-primary">From $15</span>
                        </div>
                        <a class="btn btn-square" href=""><i class="fa fa-plus text-primary"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                        <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <img class="img-fluid" src="img/hair-dyeing.png" alt="">
                        </div>
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-3">Hair Dyeing</h3>
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam.</p>
                            <span class="text-uppercase text-primary">From $15</span>
                        </div>
                        <a class="btn btn-square" href=""><i class="fa fa-plus text-primary"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                        <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <img class="img-fluid" src="img/mustache.png" alt="">
                        </div>
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-3">Mustache</h3>
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam.</p>
                            <span class="text-uppercase text-primary">From $15</span>
                        </div>
                        <a class="btn btn-square" href=""><i class="fa fa-plus text-primary"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                        <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <img class="img-fluid" src="img/stacking.png" alt="">
                        </div>
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-3">Stacking</h3>
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam.</p>
                            <span class="text-uppercase text-primary">From $15</span>
                        </div>
                        <a class="btn btn-square" href=""><i class="fa fa-plus text-primary"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->
    <!-- Service End -->


    <!-- Price Start -->
    <div class="container-xxl py-5">
        <div class="container mt-3">
            <div class="row g-0">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-secondary h-100 d-flex flex-column justify-content-center p-5">
                        <p class="d-inline-flex bg-dark text-primary py-1 px-4 me-auto">Precios y plan de suscripciones</p>
                        <h1 class="text-uppercase mb-4">CONSULTA NUESTROS SERVICIOS</h1>
                        <div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Pago mensual
                                </h6>
                                <span class="text-uppercase text-primary">$120.00</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Pago x 2 meses</h6>
                                <span class="text-uppercase text-primary">$180.00</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Pago x 3 meses</h6>
                                <span class="text-uppercase text-primary">$240.00</span>
                            </div>
                            <br>
                            <div class="d-flex justify-content-between py-2">
                                <h6 class="text-uppercase mb-0 text-primary  Right">Nuestras membresías son sin contrato, puedes cancelar cuando gustes. </h6>
                            </div>

                            <div class="d-flex justify-content-between border-bottom py-2">
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-sm-12 col-md-10">
                                    <h4 class="text-uppercase mb-0">
                                        Membresía blanca
                                    </h4>
                                    <br>
                                    <h5 class="text-uppercase mb-0">
                                        <ul class="h6">
                                            <li>1 clase</li>
                                            <li>Solo tienes acceso a una sola clase.</li>
                                        </ul>

                                    </h5>
                                </div>
                                <div class="col-sm-12 col-md-2 justify-content-center text-center align-items-center">
                                    <span class="text-uppercase text-primary">$15 </span>
                                </div>

                            </div>

                            <div class="row border-bottom py-2">
                                <div class="col-sm-12 col-md-10">
                                    <h4 class="text-uppercase mb-0">
                                        Membresía roja
                                    </h4>
                                    <br>
                                    <h5 class="text-uppercase mb-0">
                                        <ul class="h6">
                                            <li>Acceso a 8 clases durante el mes.</li>
                                        </ul>
                                    </h5>
                                </div>

                                <div class="col-sm-12 col-md-2 justify-content-center text-center align-items-center">
                                    <span class="text-uppercase text-primary">$80.00</span>
                                </div>

                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-sm-12 col-md-10">
                                    <h4 class="text-uppercase mb-0">
                                        Membresía Negra
                                    </h4>
                                    <br>
                                    <h5 class="text-uppercase mb-0">
                                        <ul class="h6">
                                            <li>Clases ilimitadas por 1 mes.</li>
                                            <li>Puedes repetir clase.</li>
                                            <li>Plan alimenticio.</li>
                                            <li>Evaluación corporal. </li>
                                            <li>Grupo de asesoramiento. </li>
                                        </ul>
                                    </h5>
                                </div>

                                <div class="col-sm-12 col-md-2 justify-content-center text-center align-items-center">
                                    <span class="text-uppercase text-primary">$120.00</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100">
                        <img class="img-fluid h-100" src={{ asset("website/img/pexels-leon-ardho-1717096.jpg") }} alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Price End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block bg-secondary text-primary py-1 px-4">Perfil</p>
                <h1 class="text-uppercase">Conoce a nuestro entrenador <!--  y alcanza tus metas de fitness --> </h1>
            </div>
            <div class="row g-4 align-items-center text-center justify-content-center">
                <div class="col-lg-4 col-md-4 col-sm-8 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid " style="max-height: 50vh; border-radius: 15px;" src={{ asset("website/img/Hilario.jpg") }} alt="">
                            <div class="team-social">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary text-center p-4 " style="margin-top: 1%; border-radius: 15px; ">
                            <h5 class="text-uppercase text-primary">Hilario</h5>
                            <span class="text-white">
                                Entrenador certificado
                                <br>
                                Sere tu entrenador designado, cuento con 5 años de experiencia
                            </span>
                        </div>
                    </div>
                </div>
                <!--
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary text-center p-4">
                            <h5 class="text-uppercase">Barber Name</h5>
                            <span class="text-primary">Designation</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary text-center p-4">
                            <h5 class="text-uppercase">Barber Name</h5>
                            <span class="text-primary">Designation</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary text-center p-4">
                            <h5 class="text-uppercase">Barber Name</h5>
                            <span class="text-primary">Designation</span>
                        </div>
                    </div>
                </div>
            -->
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Working Hours Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="h-100">
                        <img class="img-fluid h-100" src={{ asset("website/img/pexels-cottonbro-studio-4753996.jpg") }} alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-secondary h-100 d-flex flex-column justify-content-center p-5">
                        <p class="d-inline-flex bg-dark text-primary py-1 px-4 me-auto">Horas Laborales</p>
                        <h1 class="text-uppercase mb-4">Te esperamos</h1>
                        <div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase text-primary mb-0">Dias</h6>
                                <span class="text-uppercase text-primary">Entrenamiento</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Lunes</h6>
                                <span class="text-uppercase">07:00 am / 08:00 am / 09:00 am <br> 18:00 pm / 19:00 pm / 20:00 pm</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Martes</h6>
                                <span class="text-uppercase">07:00 am / 08:00 am / 09:00 am <br> 18:00 pm / 19:00 pm / 20:00 pm</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Miercoles</h6>
                                <span class="text-uppercase">07:00 am / 08:00 am / 09:00 am <br> 18:00 pm / 19:00 pm / 20:00 pm</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Jueves</h6>
                                <span class="text-uppercase">07:00 am / 08:00 am / 09:00 am <br> 18:00 pm / 19:00 pm / 20:00 pm</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Viernes</h6>
                                <span class="text-uppercase text-primary">Cerrado</span>
                            </div>
                            <div class="d-flex justify-content-between py-2">
                                <h6 class="text-uppercase mb-0">Sabado</h6>
                                <span class="text-uppercase text-primary">Cerrado</span>
                            </div>
                            <div class="d-flex justify-content-between py-2">
                                <h6 class="text-uppercase mb-0">Domingo</h6>
                                <span class="text-uppercase text-primary">Cerrado</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Working Hours End -->


    <!-- Testimonial Start -->
    <!--
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block bg-secondary text-primary py-1 px-4">Testimonial</p>
                <h1 class="text-uppercase">What Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-1.jpg' alt=''>">
                    <h4 class="text-uppercase">Client Name</h4>
                    <p class="text-primary">Profession</p>
                    <span class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</span>
                </div>
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-2.jpg' alt=''>">
                    <h4 class="text-uppercase">Client Name</h4>
                    <p class="text-primary">Profession</p>
                    <span class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</span>
                </div>
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-3.jpg' alt=''>">
                    <h4 class="text-uppercase">Client Name</h4>
                    <p class="text-primary">Profession</p>
                    <span class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</span>
                </div>
            </div>
        </div>
    </div>
-->
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <!--
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-uppercase mb-4">Get In Touch</h4>
                    <div class="d-flex align-items-center mb-2">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span class="fa fa-map-marker-alt text-primary"></span>
                        </div>
                        <span>123 Street, New York, USA</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span class="fa fa-phone-alt text-primary"></span>
                        </div>
                        <span>+012 345 67890</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span class="fa fa-envelope-open text-primary"></span>
                        </div>
                        <span>info@example.com</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-uppercase mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-uppercase mb-4">Newsletter</h4>
                    <div class="position-relative mb-4">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                    <div class="d-flex pt-1 m-n1">
                        <a class="btn btn-lg-square btn-dark text-primary m-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg-square btn-dark text-primary m-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg-square btn-dark text-primary m-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-lg-square btn-dark text-primary m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    -->
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Desafyo Fitness</a>, Todos los derechos reservados.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Diseñado por <a class="border-bottom" href="https://www.facebook.com/MauPeser">MauPeser</a>
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
    <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src={{ asset("website/lib/wow/wow.min.js") }}></script>
    <script src={{ asset("website/lib/easing/easing.min.js") }}></script>
    <script src={{ asset("website/lib/waypoints/waypoints.min.js") }}></script>
    <script src={{ asset("website/lib/owlcarousel/owl.carousel.min.js") }}></script>

    <!-- Template Javascript -->
    <script src={{ asset("website/js/main.js") }}></script>

    <script>
        let prevScrollpos = window.pageYOffset;
    const navbar = document.querySelector(".navbar");

    window.onscroll = function() {
      let currentScrollPos = window.pageYOffset;
      if (prevScrollpos > currentScrollPos) {
        navbar.style.top = "0";
      } else {
        navbar.style.top = "-80px";
      }
      prevScrollpos = currentScrollPos;
    }


    </script>

</body>

</html>
