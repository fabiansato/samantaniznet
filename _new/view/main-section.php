<?php
$filename = 'data/listadatacaptures.json';
$data = file_get_contents($filename);
$users = json_decode($data);


$filename2 = 'data/main-section.json';
$data2 = file_get_contents($filename2);
$mainsection = json_decode($data2);

?>




<main id="main">

<!-- ======= Services Section ======= -->
<section id="services">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <h1 class="titulo"><?php echo $mainsection[0]->h1?></h1>
      <h2><p class="subtitulo"><?php echo $mainsection[0]->h2?></p></h2>

    </div>

    <div class="row">

    <?php foreach ($users as $user) { ?>
      <div class="col-lg-4 col-md-6" data-aos="zoom-in">
        <div class="box">
          <div> <a href="<?= $user->link; ?>" target="_self">

            <img loading="lazy" src="<?= $user->image; ?>" class="ogimage" alt="Ganá una lavadora LG con el Sorteo de Deja para diluir">
          </div>

          <h3 class="tituloCard"><b><?= $user->title; ?> </b></h4>
          <p class="descripp"><i> <?= $user->meta; ?></i><br />

        <button type="button" class="ctaDC btn btn-primary"><?= $user->buttonText; ?></button></a>
          </p>

        </div>
      </div>
      <?php } ?>

      </div>




    </div>

  </div>
</section><!-- End Services Section -->




</main><!-- End #main -->
