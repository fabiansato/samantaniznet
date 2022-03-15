<?php
$filename = 'data/header.json';
$data = file_get_contents($filename);
$header = json_decode($data);

?>



<header  data-aos="zoom-in">
<img loading="lazy" srcset="<?php echo $header[0]->headerDesktop?> 320w,
        <?php echo $header[0]->headerMobile?> 480w,
        <?php echo $header[0]->headerDesktop?>" sizes="(max-width: 320px) 280px,
        (max-width: 480px) 440px,
        800px" src="<?php echo $header[0]->headerMobile?>" alt="<?php echo $header[0]->headerAlt?>" class="imagenSuperior">

  </header><!--  End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">

    </div>
  </section><!-- End Hero Section -->