<?php
$filename = 'data/head.json';
$data = file_get_contents($filename);
$head = json_decode($data);

header("X-Robots-Tag: index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1", true);

?>
<!DOCTYPE html>
<html lang="es">

<head>


  <!-- Favicons -->
  <link href="src/assets/img/favicon.ico" rel="icon">
  <link href="src/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="manifest" href="src/assets/img/manifest.json" />
	<meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width,initial-scale=1" />
<meta name="theme-color" content="<?php echo $head[0]->themecolor?>" />

<!-- google search console -->
<meta name="google-site-verification" content="3s9GLOHXBGaLCaB6gANipvORcqyXJ6mUIKxHpJsugNs" />
<!-- google analytics --> 

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9SVSTTJRQM"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-9SVSTTJRQM');
</script>

<!-- metadescriptions --> 
<meta charset="<?php echo $head[0]->charset ?>" />
<title><?php echo $head[0]->title ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="description" content="<?php echo $head[0]->metadescription ?>" />
	<meta name="author" content="<?php echo $head[0]->author ?>">
	<link rel="canonical" href="<?php echo $head[0]->url ?>" />
	<meta itemprop="name" content="<?php echo $head[0]->brand ?>">
	<meta itemprop="description" content="<?php echo $head[0]->metadescription ?>">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="<?php echo $head[0]->title?>">
	<meta name="twitter:description" content="<?php echo $head[0]->metadescription ?>">
	<meta name="twitter:site" content="<?php echo $head[0]->twitter?>">
	<meta name="twitter:creator" content="<?php echo $head[0]->twitter?>">
	<meta name="twitter:image:src" content="<?php echo $head[0]->url?>src/assets/img/ogimage.jpg">
	<meta name="og:title" content="<?php echo $head[0]->brand?>">
	<meta name="og:description" content="<?php echo $head[0]->metadescription ?>">
	<meta name="og:image" content="<?php echo $head[0]->url?>src/assets/img/ogimage.jpg">
  <meta property="og:image:alt" content="<?php echo $head[0]->title ?>" />
	<meta name="og:url" content="<?php echo $head[0]->url?>src/assets/img/ogimage.jpg">
	<meta name="og:site_name" content="<?php echo $head[0]->brand?>">
	<meta name="og:locale" content="es_AR">
	<meta name="og:type" content="article">
	<meta name="article:section" content="Social Media">
	<meta name="article:author" content="<?php echo $head[0]->brand?> ">
	<meta name="article:tag" content="Social Media">
  <meta name="keywords" content="<?php echo $head[0]->keywords?>">

  <meta name="robots" content="index, follow">


    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Curso de Manga - Samanta Niz</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

  

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
               ><a href="index.php"><span class="header">Curso de Manga</span></a>
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
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="M2DZXU8868UM4">
<input type="image" src="https://www.paypalobjects.com/es_XC/AR/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form>


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
                       
                            <h4><sup>$</sup>2999<span>/ mes</span></h4>
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
              
                            <h4><sup>$</sup>2499<span> / mes</span></h4>
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
                                <h4><sup>$</sup>29.99<span> / mes</span></h4>
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
                            <h4><sup>$</sup>24.99<span> / mes</span></h4>
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


</body>

</html>