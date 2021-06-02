<?php

if (!defined('PATH')) exit;

?>

<section class="mega-menu">

  <div class="glass" toggle-menu="">
  </div>
  <div class="content">
    <a href="#" class="close-btn" toggle-menu="">
      <?= svg('close') ?>
      FECHAR
    </a>

    <div class="menu-content">
      <?= menu() ?>
    </div>

    <div class="social-network">
      <h3>Siga:</h3>
      <ul>
        <li><a href="#" title="Instagram"><?= svg('instagram') ?></a></li>
        <li><a href="#" title="Facebook"><?= svg('facebook') ?></a></li>
        <li><a href="#" title="LinkedIn"><?= svg('linkedin') ?></a></li>
      </ul>
    </div>

  </div>

</section>