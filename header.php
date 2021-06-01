<?php 

if (!defined('PATH')) exit;
global $TEMPLATE_DIRECTORY_URI;

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
  <script type="text/javascript" src="<?= $TEMPLATE_DIRECTORY_URI ?>/js/jQuery.min.js"></script>
  <script type="text/javascript" src="<?= $TEMPLATE_DIRECTORY_URI ?>/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?= $TEMPLATE_DIRECTORY_URI ?>/js/script.min.js"></script>
  <link rel="stylesheet" href="<?= $TEMPLATE_DIRECTORY_URI ?>/style.css">
  <!-- / End Files -->

</head>
<body>


<header class="site-header">
  <div class="container"></div>
</header>