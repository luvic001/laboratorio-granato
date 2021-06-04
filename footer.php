<?php if (!defined('PATH')) exit; ?>

<footer class="site-footer">

  <div class="container-fluid d-lg-flex d-block justify-content-between">
    <p class="d-flex mb-3 mb-lg-0 justify-content-center justify-content-lg-start align-items-center copyright">
      <?= svg('copyright') ?>
      2021 - Todos os direitos reservados.
    </p> 
    <p class="d-lg-flex justify-content-center align-items-center justify-content-lg-end">
      <span class="d-block align-center mb-3 mb-lg-0">
        Siga o Laboratório Granato nas redes sociais
      </span>  
      <span class="d-block align-center">
        <a class="icon" href="#" target="_blank"><?= svg('instagram') ?></a>
        <a class="icon" href="#" target="_blank"><?= svg('facebook') ?></a>
      </span>
    </p>
  </div>

</footer>

</main>
<?php wp_footer() ?>
</body>
</html>