<?php 

if (!defined('PATH')) exit;
$testes = to_object([
  [
    'title' => 'ATENDIMENTO DOMICILIAR',
    'content' => 'Faça seus exames no conforto da sua casa. Disponibilizamos atendimento domiciliar com equipe capacitada para realizar exames com discrição e profissionalismo. <br>Para mais informações sobre este serviço, entre em contato conosco.',
    'color' => '#189BDB',
    'image' => get_image('img-teste-casa-slide-3.png'),
    'btn-text' => 'ENTRE EM CONTATO CONOSCO',
    'btn-link' => '#contato',
    'css_class' => 'bt_entre_em_contato_domiciliar'
  ],
  [
    'title' => 'TESTE SUA EMPRESA',
    'content' => 'O Laboratório Granato possui ampla experiência em testagem empresarial. Dispomos de logística de coleta no local de melhor conveniência para o seu time. Nossa equipe altamente capacitada para realizar todo procedimento segurança e discrição.',
    'color' => '#189BDB',
    'image' => get_image('img-teste-empresa.png'),
    'btn-text' => 'ENTRE EM CONTATO CONOSCO',
    'btn-link' => '#contato',
    'css_class' => 'bt_entre_em_contato_empresa'
  ],
  [
    'title' => 'TESTE SEU EVENTO',
    'content' => 'O Laboratório Granato oferece serviço de testagem para eventos, garantindo a segurança dos seus convidados e colaboradores. <br> Para mais informações, entre em contato conosco.',
    'color' => '#189BDB',
    'image' => get_image('img-teste-evento-slide-2.png'),
    'btn-text' => 'ENTRE EM CONTATO CONOSCO',
    'btn-link' => '#contato',
    'css_class' => 'bt_entre_em_contato_evento'
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
            <a href="<?= $t->{'btn-link'} ?>" class="btn-site big-button <?= $t->css_class ?>"><span style="color: <?= $t->color ?>;"><?= $t->{'btn-text'} ?? 'Saiba mais' ?></span></a>
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