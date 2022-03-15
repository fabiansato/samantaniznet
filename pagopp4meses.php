<!DOCTYPE html>

<html lang="es">

<head>
    <!-- Script de recaptcha-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <meta charset="UTF-8">
  
<title>Curso de Manga - Samanta Niz</title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="assets/img/favicon.png" rel="icon">
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth() + 1; //January is 0!
        var yyyy = today.getFullYear();
        if (dd < 10) {
            dd = '0' + dd
        }
        if (mm < 10) {
            mm = '0' + mm
        }

        today = yyyy + '-' + mm + '-' + dd;
        document.getElementById("datefield").setAttribute("max", today);
    </script>

    <script>
        window.console = window.console || function(t) {};
    </script>
    <script>
        if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage("resize", "*");
        }
    </script>
<style>
    @import "//netdna.bootstrapcdn.com/font-awesome/3.0/css/font-awesome.css";

.mainLoginInput{
  height: 40px;
  padding: 0px;
  font-size: 30px;
  margin: 5px 0;
}

.mainLoginInput::-webkit-input-placeholder { 
font-family: FontAwesome;
font-weight: normal;
overflow: visible;
vertical-align: top;
display: inline-block !important;
padding-left: 5px;
padding-top: 2px;
color: #537fe2;
}

.mainLoginInput::-moz-placeholder  { 
font-family: FontAwesome;
font-weight: normal;
overflow: visible;
vertical-align: top;
display: inline-block !important;
padding-left: 5px;
padding-top: 2px;
color: #537fe2;
}

.mainLoginInput:-ms-input-placeholder  { 
font-family: FontAwesome;
font-weight: normal;
overflow: visible;
vertical-align: top;
display: inline-block !important;
padding-left: 5px;
padding-top: 2px;
color: hsl(9, 40%, 60%);
}
    .form-control{
        background-color: #edefff;
        border-color: #537fe2;
    }
</style>
<script>
     function metodopago(){
         location.href = "pagopp4meses-paso2.php";
     }
</script>
 <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->
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
          <script
    src="https://www.paypal.com/sdk/js?client-id=AcKTJW9HPUkfRvP9abda5XpNQ64IB2UzS382ouUPUUN8YOqq79HdC08DAqFaHOxhXRd9OYDPaK6UN-OR"> // Required. Replace YOUR_CLIENT_ID with your sandbox client ID.
  </script>
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
                                    <h3>Elegiste Plan 4 Meses</h3>
        
                                    <h4><sup>$</sup>19.99<span>/ mes</span></h4>
                                      
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

    <option value="68usd" selected>68usd</option>
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
                            
                            <span style=" font-weight: bold;" class="btn-buy">Suscribirme plan 1 Mes</span>
                           
                          </button>








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