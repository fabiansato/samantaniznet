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
         location.href = "pagopp1mes-paso2.php";
     }
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
                                    <h3></h3>
        
                                    <h4><h4>
                                      
                                    <ul>
        
        
                                    </ul>
                                   

      <!-- Compiled and minified JavaScript 
            <div class="alert alert-danger d-none " id="mensajeError "></div>-->
   
 <div class="section-title" data-aos="fade-up">
        <p>Paso 2/2</p>
                                        <p>¡Perfecto ya te registraste! Paga tu curso:</p>
                                    </div>

<div class="row">
 <div class="col-2 col-md-1">
     
</div>

<div class="col-8 col-md-10">


<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<table>
<div id="smart-button-container">
      <div style="text-align: center;">
        <div style="margin-bottom: 1.25rem;">
          <p>Comprar Ahora</p>
          <select id="item-options"><option value="1 Mes" price="30">1 Mes - 29.99 USD</option><option value="4 Meses" price="100">4 Meses - 99.99 USD</option></select>
          <select style="visibility: hidden" id="quantitySelect"></select>
        </div>
      <div id="paypal-button-container"></div>
      </div>
    </div>
    <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
   
</form>


</div>

 <div class="col-2 col-md-1">
     
</div>

</div>




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


    <script>
      function initPayPalButton() {
        var shipping = 0;
        var itemOptions = document.querySelector("#smart-button-container #item-options");
    var quantity = parseInt();
    var quantitySelect = document.querySelector("#smart-button-container #quantitySelect");
    if (!isNaN(quantity)) {
      quantitySelect.style.visibility = "visible";
    }
    var orderDescription = 'Meses';
    if(orderDescription === '') {
      orderDescription = 'Item';
    }
    paypal.Buttons({
      style: {
        shape: 'rect',
        color: 'gold',
        layout: 'horizontal',
        label: 'pay',
        
      },
      createOrder: function(data, actions) {
        var selectedItemDescription = itemOptions.options[itemOptions.selectedIndex].value;
        var selectedItemPrice = parseFloat(itemOptions.options[itemOptions.selectedIndex].getAttribute("price"));
        var tax = (0 === 0 || false) ? 0 : (selectedItemPrice * (parseFloat(0)/100));
        if(quantitySelect.options.length > 0) {
          quantity = parseInt(quantitySelect.options[quantitySelect.selectedIndex].value);
        } else {
          quantity = 1;
        }

        tax *= quantity;
        tax = Math.round(tax * 100) / 100;
        var priceTotal = quantity * selectedItemPrice + parseFloat(shipping) + tax;
        priceTotal = Math.round(priceTotal * 100) / 100;
        var itemTotalValue = Math.round((selectedItemPrice * quantity) * 100) / 100;

        return actions.order.create({
          purchase_units: [{
            description: orderDescription,
            amount: {
              currency_code: 'USD',
              value: priceTotal,
              breakdown: {
                item_total: {
                  currency_code: 'USD',
                  value: itemTotalValue,
                },
                shipping: {
                  currency_code: 'USD',
                  value: shipping,
                },
                tax_total: {
                  currency_code: 'USD',
                  value: tax,
                }
              }
            },
            items: [{
              name: selectedItemDescription,
              unit_amount: {
                currency_code: 'USD',
                value: selectedItemPrice,
              },
              quantity: quantity
            }]
          }]
        });
      },
      onApprove: function(data, actions) {
        return actions.order.capture().then(function(orderData) {
          
          // Full available details
          console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

          // Show a success message within this page, e.g.
          const element = document.getElementById('paypal-button-container');
          element.innerHTML = '';
          element.innerHTML = '<h3>Thank you for your payment!</h3>';

          // Or go to another URL:  actions.redirect('thank_you.html');

        });
      },
      onError: function(err) {
        console.log(err);
      },
    }).render('#paypal-button-container');
  }
  initPayPalButton();
    </script>

</body>

</html>
