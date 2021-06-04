<?php

if (!defined('PATH')) exit;

?>

<section class="about-us site-sections" id="about-us">

  <div class="container">
    <div class="row">
      <div class="col-md-6 col-xl-5">

        <div class="section-title">
          <h2>SOBRE O LABORATÓRIO <br> <span>GRANATO</span></h2>
        </div>
        <div class="editor-content">
          <p>Fundado em 1982, pelo Dr. Paschoal Granato <em>in memoriam</em>, o Laboratório Granato é referência em qualidade e atendimento.</p> 
          <p>Oferecemos ampla gama de exames médicos em Patologia Clínica e Anatomia Patológica.</p>
          <br />
          <br />
          <p class="medium">Certificações</p>
          <p><?= get_image('img-certificacoes.png', true, 'mw-100') ?></p>
        </div>

      </div>

      <div class="col-md-6 col-xl-7">
        <figure class="about-us align-right">
          <?= get_image('img-about-us.png', true) ?>
          <div class="eclipse-minor">
            <?= svg('eclipse-minor') ?>
          </div>
          <div class="eclipse-major">
            <?= svg('eclipse-major') ?>
          </div>
        </figure>
      </div>

    </div>
  </div>

</section>