<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Curso de Manga - Samanta Niz</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.webp" rel="icon">
    <link href="assets/img/apple-touch-icon.webp" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Bootslander - v4.0.1
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


  <script src="formulario.js"></script>
<script src="validar.js"></script>
                            <script src="ocultarmostrar.js"></script>

                              <script>
        function metodopago() {
            location.href = "https://mpago.la/2cohBm4";
        }
    </script>



<script type="text/javascript">
    /*Inicialización de los select con Jquery*/



    $(document).ready(function () {
        $('select').formSelect();
    });


    function ocultarenviar() { // cierra el formulario
        div = document.getElementById('enviar');
        div.style.display = 'none';
    }


    function mostrarenviando() { // muestra la thank you page
        div = document.getElementById('enviando');
        div.style.display = '';
    }

    function cerrarformulario() { // cierra el formulario
        div = document.getElementById('formulario');
        div.style.visibility = 'hidden';
    }



    function mostrarthankyou() { // muestra la thank you page

        div = document.getElementById('thank-you');
        div.style.display = '';
        div2 = document.getElementById('thank-you2');

    }

    function scrollToTop() {
        window.scrollTo(0, 0);
    }
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-KTSKRCXYM4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-KTSKRCXYM4');
</script>


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="index.php"><span>Curso de Manga</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Principal</a></li>
                    <li><a class="nav-link scrollto" href="#details">¿Qué aprendes?</a></li>
                    <li><a class="nav-link scrollto" href="#samantaniz">Samanta Niz</a></li>
                    <li><a class="nav-link scrollto" href="#ilustraciones">Ilustraciones</a></li>
                    <li><a class="nav-link scrollto" href="#testimonials">Testimonios</a></li>
                    <li><a class="nav-link scrollto" href="#inscribete">Inscribete</a></li>

                    <li><a class="nav-link scrollto" href="#faqs">FAQ</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">

        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                    <div data-aos="zoom-out">
                        <h1>¿Quieres aprender a <span>dibujar?</span></h1>
                        <h2>Aprende a dibujar manga, desde cero. Curso Virtual. Empezamos en 11 de Abril 2022. ¡Últimos 15
                            cupos!</h2>
                        <div class="text-center text-lg-start">
                            <a href="#inscribete" class="btn-get-started scrollto">Suscribirme ahora</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                    <img src="assets/img/hero-img.webp" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
            </g>
        </svg>

    </section>
    <!-- End Hero -->

    <main id="main">


        <!-- ======= Details Section ======= -->
        <section id="details" class="details">
            <div class="container">

                <div class="row content">
                    <div class="col-md-4" data-aos="fade-right">
                        <img src="assets/img/details-1.webp" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-8 pt-4" data-aos="fade-up">
                        <h3>¿Qué aprendes?</h3>
                        <p class="font-italic">
                        <p>
                           Este curso está diseñado para que puedas descubrir y alcanzar tu propio estilo, aprendiendo las mejores técnicas y metodologías usadas en Manga. Súmate a darle vida a tus ideas, potenciar tus habilidades artísticas y dar tus primeros pasos como artista. Descubrí las herramientas para dar tus primeros pasos como dibujante y lleva tu talento a otro nivel.</p>
                        <p>
                        Aprendé los diferentes géneros que existen en el manga y como crear personajes simples y complejos para luego darle vida mediante expresiones del rostro, gestualidad y movimiento. Además, de dibujar personajes fantásticos, van a explorar los cambios de la edad, y poder dibujar su versión chibi.  </p>
                        <p>
                            Descubrí las mejores técnicas para dibujar indumentarias complejas, accesorios, armas,
                            animales, es importante también
                            generar escenas y fondos super atractivos que terminen en imágenes de gran plasticidad y
                            dinamismo.
                            Encontra tu propio estilo como artista manteniendo la autenticidad y principios del manga
                            aprendiendo desde cero y sin
                            conocimientos previos.</p>
                        <p>
                            Mediante un sistema de clase virtual, en vivo, voy a brindarte un feedback personalizado y
                            una tutoría constante en
                            todas tus clases.
                        </p>

                    </div>
                </div>
                
                <div class="row content" id="samantaniz">
                    <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
                        <img src="assets/img/details-4.webp" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
                        <h3><b>Samanta Niz</b></h3>
                        <p class="font-italic">
                        <p>
                            Samanta es profesora de artes visuales, artista visual y mangaka, con más de 10 años de
                            experiencia en la industria.
                            Publicó varias obras de manga tales como "somy somy login game" (editorial Larp) y "el
                            sacrificio de deigamer"
                            (<b>Editorial Planeta</b>).</p>
                        <p>
                            Ganó diversos concursos de manga e ilustración en Argentina y latinoamérica, como el de Ymir
                            2012, donde tuvo su primera
                            gran publicación de la mano de la editorial Larp con su trabajo “Na!ne?ni…love”. Participo
                            también de numerosas eventos
                            y exposiciones de dibujo en el país. Trabaja tanto en tradicional como en digital.</p>
                        </p>


                    </div>
                </div>

            </div>
        </section>
        -->
        <!-- End Details Section -->

        <!-- ======= Gallery Section ======= -->

        <section id="ilustraciones" class="gallery">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Galería</h2>
                    <p>Ilustraciones:</p>
                </div>

                <div class="row no-gutters" data-aos="fade-left">

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
                            <a href="assets/img/gallery/gallery-1.webp" class="gallery-lightbox">
                                <img src="assets/img/gallery/gallery-1.webp" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="150">
                            <a href="assets/img/gallery/gallery-2.webp" class="gallery-lightbox">
                                <img src="assets/img/gallery/gallery-2.webp" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
                            <a href="assets/img/gallery/gallery-3.webp" class="gallery-lightbox">
                                <img src="assets/img/gallery/gallery-3.webp" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="250">
                            <a href="assets/img/gallery/gallery-4.webp" class="gallery-lightbox">
                                <img src="assets/img/gallery/gallery-4.webp" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
                            <a href="assets/img/gallery/gallery-5.webp" class="gallery-lightbox">
                                <img src="assets/img/gallery/gallery-5.webp" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="350">
                            <a href="assets/img/gallery/gallery-6.webp" class="gallery-lightbox">
                                <img src="assets/img/gallery/gallery-6.webp" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400">
                            <a href="assets/img/gallery/gallery-7.webp" class="gallery-lightbox">
                                <img src="assets/img/gallery/gallery-7.webp" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="450">
                            <a href="assets/img/gallery/gallery-8.webp" class="gallery-lightbox">
                                <img src="assets/img/gallery/gallery-8.webp" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Gallery Section -->

        <!-- ======= Testimonials Section ======= -->

        <section id="testimonials" class="testimonials">

            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Testimonios</h2>
                    <p style="color:#ffff"">Comentarios de alumnos:</p>
                </div>

                <div class=" testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">







                    <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/Cynthia.webp" class="testimonial-img" alt="">
                                <h3>Cynthia Leiva</h3>

                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i> Al final del curso, sentí que
                                    Mejoré mucho y perdí el miedo al hacer diferentes tipos de cuerpos, tanto masculino como femenino. 

Logré comprender los contenidos perfectamente, las clases son dinámicas y se arman debates donde podemos compartir nuestras experiencias y enriquecernos entre nosotros. Me sentí muy a gusto. 
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/agustina.webp" class="testimonial-img" alt="">
                                <h3>Agustina Garcia</h3>

                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i> Al final del curso, sentí que
                                    ¡Si! Mejore un montón en la forma de dibujar y anatomía♡ Logré comprender los contenidos, más en las clases junto a mis compañeros y la dulce profe♡ Me sentí tan cómoda y feliz, es un espacio maravilloso y agradable. Sin miedos ni incomodades♡ 
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-1.webp" class="testimonial-img" alt="">
                                <h3>Alex</h3>

                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i> Al final del curso, sentí que
                                    el estilo y la anatomía que manejaba había cambiado para bien; comprendí muchas
                                    cosas que
                                    me costaban en un principio, y eso me hace muy feliz :D
                                    Sí, por suerte comprendí todo. Me sentí acompañado, de una forma u otra, por todos
                                    mis compañeros y la profe. Fuimos un
                                    grupo muy lindo ♡
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-2.webp" class="testimonial-img" alt="">
                                <h3>Nestor</h3>

                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i> Al finalizar el curso mejoré
                                    muchísimo mí estilo de dibujo, aprendí muchas técnicas que desconocía y que
                                    mejoraron mí
                                    manera de comunicar mis intenciones en mis ilustraciones. La profesora logro que la
                                    virtualidad no fuera un obstáculo,
                                    casi que la llevo a ser un beneficio, en ningún momento sentí que esta modalidad
                                    fuera menos que la presencialidad. En
                                    resumen, logré perfeccionarme, ¡aprender y alcanzar mis objetivos perfectamente!
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-3.webp" class="testimonial-img" alt="">
                                <h3>Giuliana</h3>

                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i> Mejore mucho. no solo en mi
                                    estilo sino también en la anatomía (sobre todo con los cuerpos femeninos 😂) Y sobre
                                    los contenidos no fue difícil entenderlos... con esto de la virtualidad fue raro,
                                    pero porque fue la primera vez que
                                    tenía clases por zoom pero no fue complicado para aprender
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <!-- End testimonial item -->


                        <!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>
       
        <!-- End Team Section -->
        <!-- ======= Pricing Section ======= -->
        <section id="inscribete" class="pricing">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Precios</h2>
                    <p>Inscripciones:</p>
                            <ul>
                                <li><a href="javascript:Pesos();"> Pesos Argentinos</a> | <a href="javascript:Dolares();">USD</a></li>
                            </ul>
                </div>
<div id="pesos">
                <div class="row" data-aos="fade-left">

                    <div class="col-lg-6 col-md-6">
                        <div class="box" data-aos="zoom-in" data-aos-delay="100">
                            <h3>Plan 1 Mes</h3>
                       
                            <h4><sup>$</sup>3000<span>/ mes</span></h4>
                            <ul>
                    
                                <li><b>Curso inicial</b></li>
                                <li>Válido por 1 mes</li>
                                <li>Se debe renovar cada mes (4 meses en total)</li>

                            </ul>
                            <div class="btn-wrap">
                         
                             
                                <a href="pagomp1mes.php" class="btn-buy">Suscribirme</a>
                               
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 mt-4 mt-md-0">
                        <div class="box featured" data-aos="zoom-in" data-aos-delay="200">
                       
                            <h3>Plan 4 Meses</h3>
              
                            <h4><sup>$</sup>2500<span> / mes</span></h4>
                            <ul>
                                <li><b>Curso inicial</b></li>
                                <li>Válido por 4 meses</li>
                                <li>1 sólo pago</li>

                            </ul>
                            <div class="btn-wrap">
                            
                                <a  href="pagomp4meses.php"  class="btn-buy">Suscribirme</a>
                          
                            </div>
                        </div>
                    </div>

</div>

                </div>

                <div id="dolar" style="display: none;">
                    <div class="row" data-aos="fade-left">
                
                        <div class="col-lg-6 col-md-6">
                            <div class="box" data-aos="zoom-in" data-aos-delay="100">
                                <h3>Plan 1 Mes</h3>
                                <h4><sup>$</sup>24.99<span> / mes</span></h4>
                                <ul>
                                    <li><b>Curso inicial</b></li>
                                    <li>Válido por 1 mes</li>
                                    <li>Se debe renovar cada mes (son 4 meses)</li>
                            
                                </ul>
                                <div class="btn-wrap">
                      
                                    <a href="pagopp1mes.php" class="btn-buy">Suscribirme</a>
                            
                                </div>
                            </div>
                        </div>
                
                        <div class="col-lg-6 col-md-6 mt-4 mt-md-0">
                        <div class="box featured" data-aos="zoom-in" data-aos-delay="200">
                            <h3>Plan 4 Meses</h3>
                            <h4><sup>$</sup>19.99<span> / mes</span></h4>
                            <ul>
                                <li><b>Curso inicial</b></li>
                                <li>Válido por 4 meses</li>
                                <li>1 sólo pago por mes</li>
                        
                            </ul>
                            <div class="btn-wrap">
                            
                                <a  href="pagopp4meses.php"  class="btn-buy">Suscribirme</a>
                      
                            </div>
                        </div>
                        </div>
                
                    </div>
                
                </div>

            </div>


            
        </section>
        <!-- End inscribete Section -->
<!-- Button trigger modal -->




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Plan 1 Mes Mercadopago</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
             

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
 
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Plan 4 Meses Mercadopago</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              
            </div>
        </div>
    </div>
</div>

<!-- Modal Dolares -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Plan 1 Mes Paypal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Plan 4 Meses Paypal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

            </div>
        </div>
    </div>
</div>

        <!-- ======= F.A.Q Section ======= -->
        <section id="faqs" class="faq section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>F.A.Q</h2>
                    <p>Preguntas Frecuentes:</p>
                </div>

                <div class="faq-list">
                    <ul>
                        <li data-aos="fade-up">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                                data-bs-target="#faq-list-1">¿Cuándo empieza el curso? <i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                <p>
                                11 de abril 2022 </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-2" class="collapsed">¿Necesito conocimientos previos? <i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    No, solo muchas ganas de aprender
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-3" class="collapsed">¿Qué materiales necesito? <i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                Como iniciamos del dibujo desde cero van a necesitar, lápiz, goma y hojas, luego a medida que el curso avance la profesora les va a ir pidiendo los materiales con anticipación. 
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-4" class="collapsed">¿va a haber un curso avanzado? <i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Sí, va a existir un curso avanzado enfocado en manga digital
                                </p>
                            </div>
                        </li>



                    </ul>
                </div>

            </div>
        </section>

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->

    <footer id="footer">
      
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Samanta Niz</span></strong>. Todos los derechos reservados
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/ -->
                Desarrollado por <a href="https://fabiansato.com/" target="_blank">Fabian Sato</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
<script type="text/javascript">
    
        function Pesos() { // cierra el enviando
            div = document.getElementById('pesos');
            div.style.display = '';
            div2 = document.getElementById('dolar');
            div2.style.display = "none";
        }



        function Dolares() { // muestra la thank you page
             div = document.getElementById('dolar');
            div.style.display = '';
            div2 = document.getElementById('pesos');
        div2.style.display = "none";
        }
</script>

</body>

</html>