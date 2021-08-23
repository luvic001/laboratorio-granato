<?php

if (!defined('PATH')) exit;

?>

<section class="powerzap-gra">
  <div class="glass"></div>
  <div class="content">
    <a class="pwz-toggle" pwd-toggle href="#">Fale pelo WhatsApp
      <span></span>
    </a>
    <form powerzap-form="">
      <p>Nome</p>
      <div class="input-text">
        <input type="text" name="pwz_name" id="pwz_name" required="">
      </div>
      <p>E-mail</p>
      <div class="input-text">
        <input type="email" name="pwz_email" id="pwz_email" required="">
      </div>
      <p>Telefone</p>
      <div class="input-text">
        <input type="tel" name="pwz_phone" id="pwz_phone" mask="cel" placeholder="DDD + Telefone" required="">
      </div>
      <p>Mensagem (opcional)</p>
      <div class="input-text mb-4">
        <textarea name="pwz_message" id="pwd_message" maxlength="500"></textarea>
      </div>

      <p>Horário de Funcionamento:</p>
      <p>
        <span>Todos os dias, das 07:00 ás 19:00<br/>
        Aberto aos domingos e feriados, inclusive para coletas domiciliares.</span>
      </p>
      
      <div class="input-submit pwz-footer">
        <input type="submit" value="Abrir WhatsApp">
      </div>

    </form>
  </div>
</section>