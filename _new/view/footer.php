<?php
$filename3 = 'data/footer.json';
$data3 = file_get_contents($filename3);
$footer = json_decode($data3);

?>


<footer id="footer" class="fullWidth elFooter">

<div  class="fullWidth">
  <div class="fullWidth">
    <picture>
      <source loading="lazy" media="(min-width:650px)" srcset="<?php echo $footer[0]->footerDesktop?>" class="footerUnilever">
      <source loading="lazy" media="(min-width:465px)" srcset="<?php echo $footer[0]->footerTablet?>" class="footerUnilever"><img
        src="<?php echo $footer[0]->footerMobile?>" alt="<?php echo $footer[0]->footerAlt?>" class="footerUnileverMobile img-fluid">
    </picture>
  </div>
</div>

<div class="row privacidad">
  <div class="col-lg-5 col-md-6 privacidad-unilever">
    <source loading="lazy" media="(min-width:650px)" srcset="<?php echo $footer[0]->footerLogo?>" class="footerUnileverlogo" style="width: 50px">
      <source loading="lazy" media="(min-width:465px)" srcset="<?php echo $footer[0]->footerLogo?>" class="footerUnileverlogo" style="width: 50px"><img
        src="<?php echo $footer[0]->footerLogo?>" alt="<?php echo $footer[0]->footerLogoAlt?>" class="footerUnileverMobile img-fluid" style="width: 50px">

    </div>
    <div class="col-lg-3 col-md-6 textoPrivacidad"  style="padding-top: 10px;">
 <a href="<?php echo $footer[0]->privacidadUrl?>" style=" color: #fff;" > <?php echo $footer[0]->privacidadTexto?></a> | <a href="<?php echo $footer[0]->cookieUrl?>" style=" color: #fff;"><?php echo $footer[0]->cookieTexto?></a>

    </div>

    <div class="col-lg-3 col-md-6">


    </div>

  </div>

</footer><!-- End Footer -->
