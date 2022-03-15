<?php


require_once __DIR__ . '/vendor/autoload.php';  //con esto le decimos que ponemos el autoload


//echo (mostrar());


include 'view/head.php';
?>

<html lang="es">

</body>



  <!-- ======= Header ======= -->
 
<header><?php
include 'view/header.php';
?>
</header>

  <!-- ======= Main ======= -->

<?php
include 'view/main-section.php';
?>


     
  <!-- ======= Footer ======= -->
  <?php
include 'view/footer.php';
?>

<!-- back to top-->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Aos-->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

  <script>
    AOS.init();
  </script>

<script src="src/assets/js/main.js"></script>

        </body>
</html>