<?php if (!defined('PATH')) exit; ?>

<style>
  section.floating-footer {
    position: fixed;
    z-index: 500;
    width: 60px;
    bottom: 2rem;
    right: 1.5rem;
    height: 60px;
  }
  @media (min-width: 576px) {
    section.floating-footer {
      right: 1rem;
      bottom: 1rem;
    }
  }
  section.floating-footer a {
    display: block;
    position: relative;
  }
  section.floating-footer a img { 
    max-width: 100%;
    height: auto;
  }
  section.floating-footer a span { 
    width: 18px;
    height: 18px;
    background-color: #c33;
    font-size: 10px;
    font-weight: 700;
    color: #fff;
    top: -5px;
    right: -5px;
    position: absolute;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 100px;
    opacity: 0;
    transition: ease .3s all;
  }
  body.show-whatsapp-footer-number section.floating-footer a span {
    opacity: 1;
  }
  body.do-not-show-whatsapp-footer-number section.floating-footer a span {
    opacity: 0 !important;
  }

  footer.site-footer {
    padding-bottom: 100px;
  }
  @media (min-width: 992px) {
    footer.site-footer {
      padding-bottom: 100px;
    }
  }

</style>
<section class="floating-footer">
  <a  
    href="https://api.whatsapp.com/send/?phone=+5521971931590&text=Olá! Estou vindo do site. Gostaria de informações sobre exames e serviços do Laboratório Granato." 
    title="Enviar mensagem WhatsApp para o Laboratório Granato"
    target="_blank"
    class="bt_whatsapp_flutuante">
    <img src="<?= get_image('whatsapp-icone-2.png') ?>" alt="WhatsApp">
    <span class="message-popup">1</span>
  </a>
</section>
<script>
jQuery(function($){
  $(document).on('click', '.bt_whatsapp_flutuante', function(event){
    event.preventDefault();
    $('body').addClass('do-not-show-whatsapp-footer-number')
             .addClass('pwd-dialog-open')
             .removeClass('show-whatsapp-footer-number');
    send_meta('bt_whatsapp_flutuante', 'bt_whatsapp_flutuante', 'bt_whatsapp_flutuante');
  });
  window.setTimeout(()=>{
    $('body').addClass('show-whatsapp-footer-number')
  }, 10000);

  $(document).on('click', '[pwd-toggle]', function(event){
    event.preventDefault();
    $('body').removeClass('pwd-dialog-open');
  });

});
</script>

<footer class="site-footer">

  <div class="container-fluid d-lg-flex d-block justify-content-between">
    <p class="d-lg-flex justify-content-center align-items-center justify-content-lg-end">
      <span class="d-flex align-items-center justify-content-center justify-content-lg-start mb-3 mb-lg-0 align-center">
        <a class="icon bt_instagram mr-2" href="https://www.instagram.com/labgranatooficial/" target="_blank"><?= svg('instagram') ?></a>
        Siga o Laboratório Granato no Instagram
      </span>  
    </p>
    <div>
      <p class="d-flex mb-3 justify-content-center justify-content-lg-start align-items-center copyright">
        <?= svg('copyright') ?>
        2021 - Todos os direitos reservados.
      </p>
      <p class="align-center">Laboratório Granato - CNPJ: 31.466.798/0001-95</p> 
    </div>
  </div>

</footer>

</main>

<script>
jQuery(function($){
    $('#close-popup, .open-popup').on('click', function(){
      $('.alert-popup').fadeOut()
    })
    $('.alert-popup').fadeIn();
});
</script>

<?php wp_footer() ?>
</body>
</html>