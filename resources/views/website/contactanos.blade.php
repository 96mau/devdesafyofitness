<x-plantilla>


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-1 mb-1 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-1">
            <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">CONTACTO</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Inicio</a></li>
                    <li class="breadcrumb-item text-danger active" aria-current="page">Contacto</li>
                </ol>
            </nav>

        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-secondary p-5">

                        <p class="d-inline-block bg-dark text-primary py-1 px-4">Contacto</p>
                        <h1 class="text-uppercase mb-4">Necesitas mas información, contáctanos!</h1>
                        {{-- <img src="{{ asset('website/img/Pesas-Minionrojos.gif') }}" alt="" style="width: 120px; margin: 0; position: absolute;"> --}}
                        <p class="mb-4">¿Quieres conocer más acerca de nuestras clases de fitness? ¡Contáctanos! Estamos felices de responder cualquier pregunta que tengas y ayudarte en todo lo que podamos.
                            {{-- <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p> --}}
                        <form action="{{ route('enviar-contactanos')}}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12">
                                    @if (session('success'))
                                        <div class="alert alert-success d-flex align-items-center" role="alert">
                                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                            <div>
                                                {{session('success')}}
                                            </div>
                                          </div>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="name" name="name" placeholder="Nombre Completo">
                                        <label for="name">Nombre Completo</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control bg-transparent" id="email" name="email" placeholder="Correo electrónico">
                                        <label for="email">Correo electrónico</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="tel" class="form-control bg-transparent" id="phone" name="phone" placeholder="Numero de celular">
                                        <label for="phone">Numero de celular</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="subject" name="subject" placeholder="Asunto">
                                        <label for="subject">Asunto</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control bg-transparent" placeholder="Leave a message here" id="message" name="message" style="height: 100px"></textarea>
                                        <label for="message">Mensaje</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Enviar Mensaje</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="google-map w-100 h-100">
                        {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d860.3306171360289!2d-97.64138383041578!3d30.398591555159808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8644cf331ad877eb%3A0x6eae2793a69bc598!2s13015%20Dessau%20Rd%20%23202%2C%20Austin%2C%20TX%2078754%2C%20EE.%20UU.!5e0!3m2!1ses!2smx!4v1683660672314!5m2!1ses!2smx"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}

                        <iframe class="google-map w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d860.3306171360289!2d-97.64138383041578!3d30.398591555159808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8644cf331ad877eb%3A0x6eae2793a69bc598!2s13015%20Dessau%20Rd%20%23202%2C%20Austin%2C%20TX%2078754%2C%20EE.%20UU.!5e0!3m2!1ses!2smx!4v1683660672314!5m2!1ses!2smx"
                        frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0" ></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

</x-plantilla>
