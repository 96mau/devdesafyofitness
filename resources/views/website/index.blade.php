
<x-plantilla>


    <!-- Carousel Start -->
    {{-- <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                        <video class="videoCarrousel" carousel-caption autoplay loop muted>
                          <source src={{ asset('website/videos/push-ups-39475.webm') }} type="video/mp4">
                        </video>

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
                <div class="carousel-item ">
                    <img class="w-100" src={{ asset("website/img/Equipo.jpg") }} alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center text-start">
                        <div class="mx-sm-5 px-5" style="max-width: 900px;">
                            <h5 class="display-5 text-white text-uppercase mb-4 animated slideInDown">
                                "Da el primer paso hacia una versión más saludable y fuerte de ti mismo,
                                se parte del equipo Desafyo Fitness, y disfruta de 4 clases gratis"
                            </h5>
                            <h5 class="d-flex align-items-center justify-content-center mb-4 animated slideInDown">
                                <a href="" class="btn btn-danger"><h2>Integrate</h2></a>
                            </h5>
                        </div>
                    </div>

                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div> --}}
    <!-- Carousel End -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            {{-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button> --}}
            </div>
            <div class="carousel-inner">

                <div class="carousel-item active">

                    <video class="videoCarrousel" carousel-caption autoplay loop muted>
                        <source src={{ asset('website/videos/push-ups-39475.mp4') }} type="video/mp4">
                        <source src={{ asset('website/videos/push-ups-39475.webm') }} type="video/webm">
                    </video>

                    <!-- <img class="w-100" src="img/carousel-1.jpg" alt="Image"> -->
                    <div class="carousel-caption d-flex align-items-center justify-content-center text-start">
                        <div class="mx-sm-5 px-5" style="max-width: 900px;">
                            <h2 class="display-2 text-white text-uppercase mb-4 animated slideInDown">"Desafía tus límites y alcanza tu máximo potencial con <b>Desaf<b class="text-primary">yo</b>   Fitness</b>"</h2>
                            <h4 class="text-white text-uppercase mb-4 animated slideInDown">
                                <a href="https://goo.gl/maps/3chuytDvqNdE3HyZ7">
                                    <i class="fa fa-map-marker-alt text-primary me-3"></i>13015 Dessau rd suite #202 Austin texas 78754
                                </a>

                            </h4>
                            <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i class="fa fa-phone-alt text-primary me-3"></i>+1 (737) 247-9329</h4>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img class="w-100" src={{ asset("website/img/Equipo.jpg") }} alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center text-start">
                        <div class="mx-sm-5 px-5" style="max-width: 900px;">
                            <h5 class="display-5 text-white text-uppercase mb-4 animated slideInDown">
                                "Da el primer paso hacia una versión más saludable y fuerte de ti mismo,
                                se parte del equipo Desafyo Fitness, y disfruta de 4 clases gratis"
                            </h5>
                            <h5 class="d-flex align-items-center justify-content-center mb-4 animated slideInDown">
                                <a href="{{ route('contactanos') }}" class="btn btn-danger"><h2>Integrate</h2></a>
                            </h5>
                            <!-- <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i class="fa fa-map-marker-alt text-primary me-3"></i>Desaau 1</h4>
                            <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i class="fa fa-phone-alt text-primary me-3"></i>+737-000-000</h4> -->
                        </div>
                    </div>

                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </div>

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
                        En nuestro gimnasio, ofrecemos una amplia variedad de clases
diseñadas para motivarte y desafiarte. Nuestros instructores están
altamente capacitados para ayudarte alcanzar tus metas, ya sea que estés
buscando perder peso, mejorar tu fuerza y resistencia, o simplemente
mantenerte activo y saludable. Desde clases de alta intensidad hasta
entrenamientos más ligeros, tenemos algo para todos. Únete a nuestra
comunidad de fitness y descubre cómo el ejercicio en grupo puede hacer
que tu entrenamiento sea más motivador, efectivo y divertido.
                    </p>
                    <p class="mb-4">¡Te esperamos en nuestras clases!</p>
                    <div class="row g-4">
                        <div class="col-md-6">
                            {{-- <h3 class="text-uppercase mb-3">Desde 2017 si limite de tiempo.</h3>
                            <p class="mb-0">Luchemos por uns vida fitness.</p> --}}
                        </div>
                        <div class="col-md-6">
                            <h3 class="text-uppercase mb-3">Mas de +150 activos</h3>
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
                    <h1 class="text-uppercase mb-4">Nutriciòn:</h1>
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


    <!-- Price Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-secondary h-100 d-flex flex-column justify-content-center p-5">
                        <p class="d-inline-flex bg-dark text-primary py-1 px-4 me-auto">Precios y plan de suscripciones</p>
                        <h1 class="text-uppercase mb-4">CONSULTA NUESTROS SERVICIOS</h1>
                        <div>
                            {{-- <div class="d-flex justify-content-between border-bottom py-2">
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
                            <br> --}}

                            {{-- <div class="d-flex justify-content-between border-bottom py-2">
                            </div> --}}
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
                                    <span class="text-uppercase text-primary">$100.00</span>
                                </div>

                            </div>
                            <div class="d-flex justify-content-between py-2">
                                <h6 class="text-uppercase mb-0 text-primary  Right">Nuestras membresías son sin contrato, puedes cancelar cuando gustes. </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="BackgImg">
                        <img class="img-fluid" src={{ asset("website/img/pexels-leon-ardho-1717096.jpg") }} alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Price End -->


    <!-- Team Start -->
    <section class=" fixed-bg bg-1-BGEntrenador ">
        <div class="container p-5">
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
                            <h5 class="text-uppercase text-primary">Hilario Vences</h5>
                            <span class="text-white">
                                Entrenador certificado.
                                <br>
                                8 años de experiencia y cambiando vidas.
                                <br>
                                Certificado en nutricion.
                                <br>
                                Certificado en movimiento de pesa rusa.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-8 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid " style="max-height: 50vh; border-radius: 15px;" src={{ asset("website/img/Entrenadora.jpg") }} alt="">
                            <div class="team-social">
                                <a class="btn btn-square" href="https://www.facebook.com/vences.1988"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href="https://www.tiktok.com/@desafyofitness?is_from_webapp=1&sender_device=pc"><i class="fa-brands fa-tiktok"></i></a>
                                <a class="btn btn-square" href="https://www.instagram.com/desafyo_fitness/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary text-center p-4 " style="margin-top: 1%; border-radius: 15px; ">
                            <h5 class="text-uppercase text-primary">Virginia Diaz</h5>
                            <span class="text-white">
                                Entrenadora certificada
                                <br>
                                6 años de experiencia y cambiando vidas
                                <br>
                                Certificada en nutricion
                                <br>
                                Certificada en movimiento de kettlebell
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team End -->


    <!-- Working Hours Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="BackgImg">
                        <img class="" src={{ asset("website/img/pexels-cottonbro-studio-4753996.jpg") }} alt="">
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
                                <span class="text-uppercase">07:00 am / 08:00 am / 09:00 am <br> 17:00 pm / 18:00 pm / 19:00 pm / 20:00 pm</span>
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
<!-- JavaScript Libraries -->

</x-plantilla>


