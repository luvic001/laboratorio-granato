<?php

getCurScript('popup-resultados', 'global');
getCurStyleSheet('popup-resultados', 'global');

?>

<section class="popup-resultados">

  <div class="glass" close-popup-resultados></div>
  <div class="content">
    
    <div class="popup-resultados-content">
      <a href="javascript:void(0);" class="close-popup-resultados" close-popup-resultados="" title="Fechar popup">
        <img src="<?= get_image('ionic-md-close.svg') ?>" alt="fechar popup">
      </a>
      <h3>Resultados de Exames</h3>
      <div class="buttons">
        <a 
          href="https://px35-rol.pleres.net/login.aspx?ad=granato&hash=" 
          title="Exames realizados até 10/05/2022"
          target="_blank"
          close-popup-resultados>
          Exames realizados até <br/>
          <b>10/05/2022</b>
        </a>
        <a 
          href="https://granato.shiftcloud.com.br/shift/lis/granato/elis/s01.iu.web.Login.cls?config=UNICO" 
          title="Exames realizados a partir de 11/05/2022"
          target="_blank"
          close-popup-resultados>
          Exames realizados a partir de <br/>
          <b>11/05/2022</b>
        </a>
      </div>
    </div>

  </div>

</section>