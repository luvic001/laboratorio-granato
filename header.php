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
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-199048794-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-199048794-1');
  </script>

  <!-- Files -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link data-href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <style>
    <?= get_file('style.css') ?>
  </style>
  <script>var adm_ajax = '<?= admin_url('admin-ajax.php') ?>';</script>
  <script type="text/javascript" src="<?= $TEMPLATE_DIRECTORY_URI ?>/js/jQuery.min.js"></script>
  <script type="text/javascript" src="<?= $TEMPLATE_DIRECTORY_URI ?>/js/bootstrap.min.js" async defer></script>
  <script type="text/javascript" src="<?= $TEMPLATE_DIRECTORY_URI ?>/js/script.min.js" async defer></script>

  <!-- / End Files -->

</head>
<body <?= body_class() ?>>

<?php get_modules('mega-menu') ?>
<?php get_modules('powerzap-gra') ?>
<?php if (!isset($_GET['gads'])): ?>
<?php $popup = get_theme_mod('global-site-popup-image'); if ($popup): ?>
<style>
    .alert-popup,
    .alert-popup .glass-popup {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        padding: 1rem;
    }
    .alert-popup { 
        z-index: 500;
        display: none;
    }
    .alert-popup .glass-popup {
        background-color: rgba(0,0,0,.8);
    }
    .alert-popup .popup-content {
        display: flex;
        justify-content: center;
        position: relative;
        max-width: 640px;
        background-color: #000;
        border-radius: 12px;
        margin: 0 auto;
        margin-top: 4rem;
    }
    .alert-popup .popup-content img { 
        max-width: 100%;
        position: relative;
        z-index: 1;
    }
    .alert-popup .popup-content a#close-popup {
        z-index: 2;
        font-size: 46px;
        color: #fff;
        text-decoration: none;
        position: absolute;
        top: 5px;
        right: 20px;
    }
</style>
<div class="alert-popup">
    <div class="glass-popup"></div>
    <div class="popup-content">
        <?php $link = get_theme_mod('global-site-popup-link'); $nt = get_theme_mod('global-site-popup-link-new_blank'); ?>
        <?php if($link): ?>
        <a href="<?= $link ?>" class="open-popup" title="Consultas online gratuitas" <?php if ($nt) ___('target="_blank"') ?>>
        <?php endif; ?>
            <figure class="d-flex align-items-center justify-content-center"><img src="<?= wpfx_get_image($popup, 'full') ?>" alt=""></figure>
        <?php if ($link): ?>
        </a>
        <?php endif; ?>
        <?php $btncolor = get_theme_mod('global-site-popup-close_color'); ?>
        <a href="#" id="close-popup" title="Fechar" style="color: <?= $btncolor ? $btncolor: '#466fb8'; ?>;">&times;</a>
    </div>
</div>
<?php endif; endif; ?>

<main class="site-content">

<header class="site-header">
  <div class="container-fluid d-flex justify-content-between">
    <a href="<?= site_url() ?>" class="logo-space" title="<?= $sitename ?>">
      <img src="<?= get_image('img-lab.png') ?>" alt="<?= $sitename ?>">
    </a>
    <div class="menu-space">
      <a href="http://seulaudo.com.br/granato" target="_blank" class="btn-site btn-header bt_resultados_online" title="Resultados">Resultados</a>
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