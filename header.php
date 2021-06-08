<?php 

if (!defined('PATH')) exit;
global $TEMPLATE_DIRECTORY_URI, $sitename;
$sitename = get_bloginfo('name') . ' | ' . get_bloginfo('description');

?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= wp_title() ?></title>
  <?php wp_head() ?>

  <!-- Files -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="<?= $TEMPLATE_DIRECTORY_URI ?>/style.css" rel="stylesheet">
  <script type="text/javascript" src="<?= $TEMPLATE_DIRECTORY_URI ?>/js/jQuery.min.js"></script>
  <script type="text/javascript" src="<?= $TEMPLATE_DIRECTORY_URI ?>/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?= $TEMPLATE_DIRECTORY_URI ?>/js/script.min.js"></script>
  <!-- / End Files -->

</head>
<body <?= body_class() ?>>

<?php get_modules('mega-menu') ?>

<main class="site-content">

<header class="site-header">
  <div class="container-fluid d-flex justify-content-between">
    <a href="<?= site_url() ?>" class="logo-space" title="<?= $sitename ?>">
      <img src="<?= get_image('img-lab.png') ?>" alt="<?= $sitename ?>">
    </a>
    <div class="menu-space">
      <a href="http://seulaudo.com.br/granato" target="_blank" class="btn-site btn-header" title="Resultados">Resultados</a>
      <a href="#" class="menu-btn d-flex align-items-center no-decoration" toggle-menu="">
        <span>Menu</span>
        <span>
          <span></span>
          <span></span>
          <span></span>
        </span>
      </a>
    </div>
  </div>
</header>