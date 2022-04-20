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




                      

                              <script>
        function metodopago() {
            location.href = "https://mpago.la/2cohBm4";
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
<script type="text/javascript">
    /*Inicialización de los select con Jquery*/



    $(document).ready(function() {
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
<link rel="stylesheet" href="pikaday.css">

<!-- Facebook Pixel Code -->
<!--
<script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '576856525983617');
    fbq('track', 'PageView');

    function completeRegistration() {
        fbq('track', 'CompleteRegistration', {
            value: 1.00,
            currency: 'USD'
        });
        document.getElementById("demo").innerHTML = "OK Complete Registration Pixel  ";
    }
</script>-->
<!--
<noscript><img height="1" width="1" style="display:none"
   src="https://www.facebook.com/tr?id=639680160014442&ev=PageView&noscript=1"
 /></noscript>-->
<!-- End Facebook Pixel Code -->


<body aos(); ">
<script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
          	  <!-- DANGER Testeos del php OCULTAR Al Cerrar el UAT     -->
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent"  style="background-color: #0f14a3;">
        <div class="container d-flex align-items-center justify-content-between">
    
            <div class="logo">
                <h1><a href="index.php"><span>Curso de Manga</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>
    
            <nav id="navbar" class="navbar" >
                <ul>
                    <li><a class="nav-link scrollto active" href="/">Principal</a></li>
                    <li><a class="nav-link scrollto" href="index.php#details">¿Qué aprendes?</a></li>
                    <li><a class="nav-link scrollto" href="index.php#samantaniz">Samanta Niz</a></li>
                    <li><a class="nav-link scrollto" href="index.php#ilustraciones">Ilustraciones</a></li>
                    <li><a class="nav-link scrollto" href="index.php#testimonials">Testimonios</a></li>
                    <li><a class="nav-link scrollto" href="index.php#inscribete">Inscribete</a></li>
    
                    <li><a class="nav-link scrollto" href="index.php#faqs">FAQ</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
    
        </div>
    </header>
    <!-- End Header -->

</br>
	  <div class="alert alert-danger d-none " id="mensajeError "></div>	
        <main id="main">
        
        
            <!-- ======= Pricing Section ======= -->
            <section id="inscribete" class="pricing">
                <div class="container">
        
                    <div data-aos="fade-up">
        
                
                    </div>
                    <div id="pesos">
                        <div class="row" data-aos="fade-left">
        
                            <div class="col-lg-12 col-md-12">
                                <div class="box" data-aos="zoom-in" data-aos-delay="100">
                                    <h3>Elegiste Plan 1 Mes</h3>
                                    <h4><del> <sup>$29.99</sup><span> </del>  $24.99 / mes</span></h4>
                                    <ul>
        
        
                                    </ul>
                                    <div class="section-title" data-aos="fade-up">
        <p>Paso 1/2</p>
                                        <p>Ingresá tus datos:</p>
                                    </div>

      <!-- Compiled and minified JavaScript 
            <div class="alert alert-danger d-none " id="mensajeError "></div>-->
      <div>
         <div class="row ">
            <div class="col s12 l6 ">
     
            <div class="col s12 l5 fondoformulario ">
                          <!-- Mensaje para corroborar datos DANGER-->
                         <!--    <form onSubmit = "return checkForm(event) " id="formulario " action="backend/backend.php " method="get ">
            -->
      



             <div col s12 l5 fondoformulario" id="thank-you" class="animate__animated animate__heartBeat" style="display:none; position: fixed;
    bottom: 50px;
    right: 1px;
    text-align: center;">

    
    <img style="width:85%; height: 95%;  margin-left: 10%" src="img/exitos.png">
    </div>

    <form id="formulario">


        <!-- imagen para movil-->
    



        <div class="row">


            <div class="col input-field input-outlined col-12 col-md-6">
                    <label for="nombre"><b>Nombre:</b></label>
                <input type="text" class="form-control mainLoginInput" minlength="3" maxlength="34" name="nombre" id="nombre" placeholder="👤" required>
            
                <i class="significapeligro" id="errornombre"></i>
            </div>
            <div class="input-field input-outlined  col-12 col-md-6">
                    <label for="apellido"><b>Apellido:</b></label>
                <input class="form-control  mainLoginInput" type="text" minlength="3" maxlength="34" name="apellido" id="apellido" required>
            
                <i class="significapeligro" id="errorapellido"></i>
            </div>

</div>

</br>
            <div class="row">
    
            <div class="input-field input-outlined  col-12 col-md-6">
    <label for="email"><b>Email:</b></label>
                <input type="text" name="email" id="email" class="form-control mainLoginInput"  placeholder="📧" required>
            
                <!--    <label for="email">Email</label>-->
                <i class="significapeligro" id="erroremail"></i>

            </div>




            <div class="col input-field input-outlined col-12 col-md-6">
<label for="Pais"><b>Pais:</b></label>
                <input type="text" minlength="2" maxlength="34" name="pais" id="pais"  class="form-control mainLoginInput" placeholder="🌎" required>
                
             
                <i class="significapeligro" id="errorpais"></i>
            </div>
        </div>
        </div>

<div id="oculto" style="visibility : hidden;">

        
<select name="cuotas_pagadas" id="cuotas_pagadas">

    <option value="1" selected>1</option>
</select>

<select name="metodo_pago" id="metodo_pago">

    <option value="Paypal" selected>Paypal</option>
</select>

<select name="cantidad_enviada" id="cantidad_enviada">

    <option value="20usd" selected>20usd</option>
</select>

</div>


        <div class="row">
            <div class="col s12 espacios blanco">
  
            </div>
            <!--
            <i style="color:#FFFEFF;margin-left: 20%; font-size: 1.5em;" id="mostrarerrortodo"></i>

            <div class="col s12" style="margin-left:12%;">
                <div class="significapeligro" id="g-recaptcha-error"></div>

                <div class="g-recaptcha" data-sitekey="6LcLG80ZAAAAAJt92DHMupIkIK2LZJaNzcInLGrh"></div>
            </div>
            -->
            
        </div>

        <div id="thank-you3" style="display:none;">

            
            <img style="width:85%; height: 95%;  margin-left: 10%" src="https://www.promounilever.com/RexonaClasicoBoca/img/exitos.png">
        </div>

        <div class="row espacios">
            <div class="col s12">



                <div class="container">
                    <div class="center">
                        <button class="btn" type="submit" name="action" onclick="validacionDeCampos()" id="enviar" style="border-radius: 15px;">
                            
                            <span style=" font-weight: bold;" class="btn-buy">Inscribirme 1 mes</span>
                  
                          </button>

                          <h3>Recuerda que el curso dura 4 meses en total</h3>






                    </div>
                </div>
</main>


                <div id="enviando" style="display:none;">

                    <div class="progress">
                        <div class="indeterminate"></div>
                    </div>


                </div>

            </div>

        </div>

    </form>
    <div id="thank-you2" style="display:none;">


        <img style="width:85%; height: 95%;  margin-left: 10%" src="img/exitos.png">
    </div>
    </div>
    </div>
    </div>





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
                Desarrollado por <a href="https://fabiansato.com/">Fabian Sato</a>
            </div>
        </div>
    </footer>





    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js'></script>

    <!--Script para validar datos ingresados-->
    <script src="validar.js"></script>
    <script src="ocultarmostrar.js"></script>
    <!--Script para validar datos ingresados-->
    <script src="datepicker.js"></script>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/date-fns/1.28.5/date_fns.min.js"></script>
    <script src="pikaday.js"></script>

    <script>
        var picker = new Pikaday({
            field: document.getElementById('datepicker'),
            toString: function(date, format) {
                return dateFns.format(date, format);
            },
            i18n: {
                previousMonth: 'Anterior',
                nextMonth: 'Siguiente',
                months: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                weekdays: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
                weekdaysShort: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sáb']
            },
            firstDay: 1,
            format: "DD-MM-YYYY",
            minDate: new Date(1923, 12, 31),
            maxDate: new Date(2020, 12, 31),
            yearRange: [1923, 2020]
        });
    </script>

    <!-- script para inicializar el modal-->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.modal');
            var instances = M.Modal.init(elems, options);
        });

        // Or with jQuery

        $(document).ready(function() {
            $('.modal').modal();
        });
    </script>
    <script src="formulario.js"></script>

    <!--
     <p class="text-light" id="demo"></p>
<button onclick="completeRegistration()">TESTEAR PIXELS</button>

 -->

    <Script>
        function aos() {

            AOS.init();
        }
    </script>
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>




</body>

</html>