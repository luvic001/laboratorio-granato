<?php

if (!defined('PATH')) exit;
$testes = to_object([
  [
    'teste' => 'Teste PCR',
    'quando' => 'Até o 10° dia de sintomas, preferencialmente entre o 3° e o 5° dia.',
    'prazo' => 'no mesmo dia'
  ],
  [
    'teste' => 'Sorologia IgM e IgG',
    'quando' => 'Até o 10° dia de sintomas ou suposto contágio.',
    'prazo' => '1 dia'
  ],
  [
    'teste' => 'Sorologia IgG',
    'quando' => 'Em qualquer momento, mesmo que não tenha tido sintomas.',
    'prazo' => '1 dia'
  ],
  [
    'teste' => 'Teste Rápido Qualitativo (IgM e IgG)',
    'quando' => 'A partir do 20° dia de sintomas.',
    'prazo' => 'Na mesma hora'
  ],
  [
    'teste' => 'Teste Rápido de Antígeno',
    'quando' => 'Até o 10º dia de sintomas, preferencialmente entre o 3º e 5º dia.',
    'prazo' => 'Na mesma hora'
  ],
  [
    'teste' => 'Teste sorológico para detecção de anticorpos neutralizantes',
    'quando' => 'A partir do 20° dia de sintomas.',
    'prazo' => '2 dias'
  ],
  [
    'teste' => 'PCR na saliva',
    'quando' => 'Até o 10º dia de sintomas, preferencialmente entre o 3º e 5º dia.',
    'prazo' => '3 dias'
  ]
]);

?>

<section class="site-sections pb-5" style="background-color: #F2F8F8;">
  <div class="container">
    <div class="section-title align-center">
      <h2>TESTES PARA <br><span>COVID-19</span></h2>
    </div>
    <div class="section-description">
      <p class="align-center">Resultados rápidos e precisos na medida da sua necessidade.</p>
    </div>

    <div class="test-table">
      <ul class="first-table row">
        <li class="col-md-3">Teste</li>
        <li class="col-md-7">Quando Fazer</li>
        <li class="col-md-2">Prazo</li>
      </ul>
      <?php foreach ($testes as $t): ?>
      <ul class="row">
        <li class="col-md-3"><?= $t->teste ?></li>
        <li class="col-md-7"><?= $t->quando ?></li>
        <li class="col-md-2"><?= $t->prazo ?></li>
      </ul>
      <?php endforeach ?>
      
    </div>

    <div class="featured-text">
      <p class="align-center">Faça o teste em nossa unidade ou no conforto da sua casa.</p>
    </div>

  </div>

</section>