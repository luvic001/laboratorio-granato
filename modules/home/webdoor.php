<?php

if (!defined('PATH')) exit;
$repeat = 1;
?>

<section class="webdoor" id="inicio">

  <div id="home-webdoor" class="carousel slide" data-ride="carousel">
    
    <div class="carousel-inner">

      <?php $ind=0; for ($i = 0; $i < $repeat; $i++): ?>
        <div class="carousel-item <?= ($i == 0) ? 'active' : null ?>">
          <div class="background-container background-parallax-ctrl background-container-<?= $i ?>" data-images="<?= get_image('hero-mobile.png') ?>|<?= get_image('hero-01.png') ?>|.background-container-<?=$i?>"></div>
          <div class="section-lateral-paddings h-100">
            <div class="container-fluid d-flex align-items-center h-100">
              <div class="slide-wrapper">
                <h2>VOLTE ÀS ATIVIDADES <br> COM SEGURANÇA</h2>
                <p>Teste PCR para empresas com</p>
                <p>resultado no mesmo dia</p>
                <a href="#testes-para-covid-19" class="btn-site white-button bt_webdoor" title="Saiba mais">Saiba mais <?= svg('arrow-right') ?></a>
              </div>
            </div>
          </div>
        </div>
      <?php $ind++; endfor; ?>

    </div>
    
    <?php if ($ind > 1): ?>

    <ol class="carousel-indicators">
      <?php for ($i = 0; $i < $ind; $i++): ?>
        <li data-target="#home-webdoor" data-slide-to="<?= $i ?>" class="<?= ($i == 0) ? 'active' : null ?>"></li>
      <?php endfor; ?>
    </ol>

    <?php endif; ?>

  </div>

</section>