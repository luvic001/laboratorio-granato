<?php 

if (!defined('PATH')) exit;
$testes = to_object([
  [
    'title' => 'TESTE SUA EMPRESA',
    'content' => 'O Laboratório Granato possui ampla experiência em testagem empresarial. Dispomos de logística de coleta no local de melhor conveniência para o seu time. Nossa equipe altamente capacitada para realizar todo procedimento segurança e discrição.',
    'color' => '#189BDB',
    'image' => 'https://albasaude.com.br/wp-content/uploads/2020/02/destaque-image-01.jpg',
    'btn-text' => 'ENTRE EM CONTATO CONOSCO',
    'btn-link' => '#contato'
  ],
  [
    'title' => 'TESTE SUA EMPRESA',
    'content' => 'O Laboratório Granato possui ampla experiência em testagem empresarial. Dispomos de logística de coleta no local de melhor conveniência para o seu time. Nossa equipe altamente capacitada para realizar todo procedimento segurança e discrição.',
    'color' => '#189BDB',
    'image' => 'https://albasaude.com.br/wp-content/uploads/2020/02/destaque-image-01.jpg',
    'btn-text' => 'ENTRE EM CONTATO CONOSCO',
    'btn-link' => '#contato'
  ],
  [
    'title' => 'TESTE SUA EMPRESA',
    'content' => 'O Laboratório Granato possui ampla experiência em testagem empresarial. Dispomos de logística de coleta no local de melhor conveniência para o seu time. Nossa equipe altamente capacitada para realizar todo procedimento segurança e discrição.',
    'color' => '#189BDB',
    'image' => 'https://albasaude.com.br/wp-content/uploads/2020/02/destaque-image-01.jpg',
    'btn-text' => 'ENTRE EM CONTATO CONOSCO',
    'btn-link' => '#contato'
  ],

]);

if ($testes):

?>
<section class="beneficios-novo">
  <div class="carousel-granato">

    <div class="item item-image" style="max-width: 960px;">
      <?php $ind = 0;foreach ($testes as $t): ?>
      <div class="image carousel-data image-slide-item image-slide-item-<?= $ind ?> d-flex align-items-center justify-content-center" style="min-width: 960px;">
        <div class="color-base w-100 h-100" style="background-color: <?= $t->color ?>;"></div>
        <div class="image-layer w-100 h-100" data-background="<?= $t->image ?>"></div>
      </div>
      <?php $ind++; endforeach; ?>
    </div>

    <div class="item item-content" style="max-width: 960px;">

      <div class="body-items">

        <?php $ind = 0;foreach ($testes as $t): ?>
        <div class="content carousel-data content-slide-item content-slide-item-<?= $ind ?> <?= ($ind == 0) ? 'active' : '' ?>" style="min-width: 960px;">
          <div class="color-base" style="background-color: <?= $t->color ?>;"></div>
          <div class="content-base">
            <h2><?= $t->title ?></h2>
            <p><?= $t->content ?></p>
            <?php if ($t->{'btn-link'}): ?>
            <a href="<?= $t->{'btn-link'} ?>" class="btn-site big-button"><span style="color: <?= $t->color ?>;"><?= $t->{'btn-text'} ?? 'Saiba mais' ?></span></a>
            <?php endif; ?>
          </div>
        </div>
        <?php $ind++;endforeach; ?>

        <?php if ($ind > 1): ?>
        <div class="controller">
          <ul>
            <?php for ($i = 0; $i < $ind; $i++): ?>
            <li go-to="<?= $i ?>" class="<?= ($i == 0) ? 'active' : null ?>"></li>
            <?php endfor; ?>
          </ul>
        </div>
        <?php endif; ?>

      </div>
    </div>
  </div>
</section>
<?php

endif;