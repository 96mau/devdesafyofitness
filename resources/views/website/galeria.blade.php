<x-plantilla>


    <style>
        .container__items {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .gallery-item
        {
            opacity: 1;
            transition: opacity 0.3s ease;
        }
        .gallery-item:hover {
            opacity: 0.2;
            transition: opacity 0.3s ease;
        }

        .polaroid {
            margin: 20px;
            width: 170px;
            box-shadow: 0 0.2rem 1.2rem rgba(0, 0, 0, 0.2);
        }

        .polaroid:hover {
            transform: scale(1.2);
        }

        .polaroid__content-image {
            height: 180px;
            width: 100%;
            overflow: hidden;
        }

        .polaroid__content-image>img {
            height: 100%;
            width: 100%;
            display: block;
            object-fit: cover;
        }

        .polaroid__content-caption {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 15px;
            min-height: 20px;
            color: white;
        }

        /* Estilo para el contenedor de la imagen ampliada */
      .zoom-container {
        position: fixed;
        display: flex;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.8);
        display: none;
        justify-content: center;
        align-items: center;

        z-index: 9999;
      }

      /* Estilo para la imagen ampliada */
      .zoomed-image {
        width: 100%;
        z-index: 1;
        max-height: 70vh;
      }


      /* Estilo para el botón de cierre */
      .close-button {
        justify-content: right;
        float: right;
        position: relative;
        top: 25px;
        right: -35px;
        color: #ff0000;
        font-size: 50px;
        cursor: pointer;
        transition: 0.6s;
      }
      .close-button:hover {
        color: white;
        transition: 0.6s;
      }

      .zoomsubcont
      {

        max-width: 40vw;
        max-height: 80vh;
        width: 30vw;
        height: 80vh;
        justify-content: center;
        align-items: center;
        margin: 0;
      }

      @media (max-width: 1144px)
      {
        .zoomed-image {
            max-width: 65vw;
            max-height: 85vh;
            width: 50vw;
            height: 80vh;
        }
      }


      .marcorojo
      {
        position: relative;
        margin-top: -50px;
        width: 100%;
        height: 10vh;
        z-index: 2;
      }
    </style>



    <!-- Page Header Start -->
    <div class="container-fluid page-header_gallery py-1 mb-1 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-1">
            <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">Galería</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Inicio</a></li>
                    <li class="breadcrumb-item text-danger active" aria-current="page">Galería</li>
                </ol>
            </nav>
        </div>
    </div>


    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-12">
                    <p class="mb-4">
                        Nos complace presentarles la sección de nuestro equipo dedicada al fitness, donde podrán
                        encontrar
                        una amplia variedad de actividades y rutinas para mantenerse en forma.
                        Queremos ayudarles a alcanzar sus objetivos de salud y bienestar a través de nuestros
                        programas diseñados por expertos en el campo del fitness.
                    </p>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Contact Start -->
    <div class="container" style="">
        <div class="container__items">
            <div class="polaroid two">
                <div class="polaroid__content">
                    <div class="polaroid__content-image">
                        <img class="gallery-item" src='{{ asset('website/Gallery/ADS_9184 copy.jpg') }}' alt='' data-src='{{ asset('website/Gallery/ADS_9184 copy.jpg') }}'>
                    </div>
                    <div class="polaroid__content-caption marcobootom">
                        <p>Por una vida fitness</p>
                    </div>
                </div>
            </div>
            <div class="polaroid four">
                <div class="polaroid__content">
                    <div class="polaroid__content-image">
                        <img class="gallery-item" src='{{ asset('website/Gallery/Imagen de WhatsApp 2023-04-27 a las 22.26.23.jpg') }}' alt='' data-src='{{ asset('website/Gallery/Imagen de WhatsApp 2023-04-27 a las 22.26.23.jpg') }}'>
                    </div>
                    <div class="polaroid__content-caption marcobootom">
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="polaroid five">
                <div class="polaroid__content">
                    <div class="polaroid__content-image">
                        <img class="gallery-item" src='{{ asset('website/Gallery/ADS_9240 copy.jpg') }}' alt='' data-src='{{ asset('website/Gallery/ADS_9240 copy.jpg') }}'>
                    </div>
                    <div class="polaroid__content-caption marcobootom">
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="polaroid eight">
                <div class="polaroid__content">
                    <div class="polaroid__content-image">
                        <img class="gallery-item" src='{{ asset('website/Gallery/Imagen de WhatsApp 2023-04-25 a las 08.45.13.jpg') }}' alt='' data-src='{{ asset('website/Gallery/Imagen de WhatsApp 2023-04-25 a las 08.45.13.jpg') }}'>
                    </div>
                    <div class="polaroid__content-caption marcobootom">
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="polaroid ten">
                <div class="polaroid__content">
                    <div class="polaroid__content-image">
                        <img class="gallery-item" src='{{ asset('website/Gallery/Imagen de WhatsApp 2023-04-25 a las 12.45.11.jpg') }}' alt='' data-src='{{ asset('website/Gallery/Imagen de WhatsApp 2023-04-25 a las 12.45.11.jpg') }}'>
                    </div>
                    <div class="polaroid__content-caption marcobootom">
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="polaroid ten">
                <div class="polaroid__content">
                    <div class="polaroid__content-image">
                        <img class="gallery-item" src='{{ asset('website/Gallery/Imagen de WhatsApp 2023-04-27 a las 20.11.06.jpg') }}' alt='' data-src='{{ asset('website/Gallery/Imagen de WhatsApp 2023-04-27 a las 20.11.06.jpg') }}'>
                    </div>
                    <div class="polaroid__content-caption marcobootom">
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="polaroid ten">
                <div class="polaroid__content">
                    <div class="polaroid__content-image">
                        <img class="gallery-item" src='{{ asset('website/Gallery/Imagen de WhatsApp 2023-04-27 a las 22.29.37.jpg') }}' alt='' data-src='{{ asset('website/Gallery/Imagen de WhatsApp 2023-04-27 a las 22.29.37.jpg') }}'>
                    </div>
                    <div class="polaroid__content-caption marcobootom">
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="polaroid ten">
                <div class="polaroid__content">
                    <div class="polaroid__content-image">
                        <img class="gallery-item" src='{{ asset('website/Gallery/Imagen de WhatsApp 2023-04-27 a las 22.34.33.jpg') }}' alt='' data-src='{{ asset('website/Gallery/Imagen de WhatsApp 2023-04-27 a las 22.34.33.jpg') }}'>
                    </div>
                    <div class="polaroid__content-caption marcobootom">
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="polaroid ten">
                <div class="polaroid__content">
                    <div class="polaroid__content-image">
                        <img class="gallery-item" src='{{ asset('website/Gallery/ADS_9240 copy.jpg') }}' alt='' data-src='{{ asset('website/Gallery/ADS_9240 copy.jpg') }}'>
                    </div>
                    <div class="polaroid__content-caption marcobootom">
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="polaroid ten">
                <div class="polaroid__content">
                    <div class="polaroid__content-image">
                        <img class="gallery-item" src='{{ asset('website/Gallery/pexels-dejan-krstevski-1582161.jpg') }}' alt='' data-src='{{ asset('website/Gallery/pexels-dejan-krstevski-1582161.jpg') }}'>
                    </div>
                    <div class="polaroid__content-caption marcobootom">
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="polaroid ten">
                <div class="polaroid__content">
                    <div class="polaroid__content-image">
                        <img class="gallery-item" src='{{ asset('website/Gallery/20230430_165141.jpg') }}' alt='' data-src='{{ asset('website/Gallery/20230430_165141.jpg') }}'>
                    </div>
                    <div class="polaroid__content-caption marcobootom">
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="polaroid ten">
                <div class="polaroid__content">
                    <div class="polaroid__content-image">
                        <img class="gallery-item" src='{{ asset('website/Gallery/pexels-karl-solano-2780762.jpg') }}' alt='' data-src='{{ asset("website/Gallery/pexels-karl-solano-2780762.jpg") }}'>
                    </div>
                    <div class="polaroid__content-caption marcobootom">
                        <p>Fuerza y mente</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="zoom-container">
        <div class="zoomsubcont">
        <div class="close-button">&times;</div>
            <img class="zoomed-image">
            <br>
            <div class="marcobootom marcorojo"></div>
        </div>

      </div>
    <!-- Contact End -->

    <script>
        var polaroids = document.querySelectorAll('.polaroid');
        polaroids.forEach(item => {
            const randomRotation = Math.floor(Math.random() * (6 - -6 + 1) + -6);
            item.style.transform = `rotate(${randomRotation}deg)`
        })
    </script>

<script>
    // Función para mostrar la imagen ampliada
    function showZoomedImage(src) {
      const zoomContainer = document.querySelector(".zoom-container");
      const zoomedImage = zoomContainer.querySelector(".zoomed-image");
      zoomedImage.src = src;
      zoomContainer.style.display = "flex";
      // Agregar evento para cerrar la imagen al hacer clic fuera de ella
      zoomContainer.addEventListener("click", closeZoomedImage);
      // Agregar evento para cerrar la imagen al presionar la tecla ESC
      document.addEventListener("keydown", (e) => {
        if (e.key === "Escape") {
          closeZoomedImage();
        }
      });
    }

    // Función para cerrar la imagen ampliada
    function closeZoomedImage() {
      const zoomContainer = document.querySelector(".zoom-container");
      zoomContainer.style.display = "none";
      // Remover eventos para cerrar la imagen al hacer clic fuera de ella y al presionar la tecla ESC
      zoomContainer.removeEventListener("click", closeZoomedImage);
      document.removeEventListener("keydown", (e) => {
        if (e.key === "Escape") {
          closeZoomedImage();
        }
      });
    }

    // Agregar evento para mostrar la imagen ampliada al hacer clic en un elemento de la galería
    const galleryItems = document.querySelectorAll(".gallery-item");
    galleryItems.forEach((item) => {
      item.addEventListener("click", () => {
        const src = item.getAttribute("data-src");
        showZoomedImage(src);
      });
    });
  </script>

</x-plantilla>
