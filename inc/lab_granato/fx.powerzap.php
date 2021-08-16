<?php

function call_powerzap() {

  hjson();

  $nome = strip_tags($_POST['pwz_name']);
  $email = strip_tags($_POST['pwz_email']);
  $telefone = strip_tags($_POST['pwz_message']);

  if (!$nome) $err[] = [
    'field' => 'pwz_name',
    'content' => 'O nome é obrigatório'
  ];

  elseif (strlen($nome) < 3) $err[] = [
    'field' => 'pwz_name',
    'content' => 'O nome deve conter no mínimo 3 caracteres'
  ];

  if (!$email) $err[] = [
    'field' => 'pwz_email',
    'content' => 'O email é obrigatório'
  ];

  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) $err[] = [
    'field' => 'pwz_email',
    'content' => 'E-mail inválido.'
  ];

  if (!$err) {

    $powerzap = new powerzap;
    $powerzap->set_nome($nome);
    $powerzap->set_email($email);
    $powerzap->set_mensagem($telefone);
    $powerzap->insert_into_database();

    fjson([
      'success' => true,
      'content' => $powerzap->get_final_url()
    ]);

  }

  else {

    fjson([
      'success' => false,
      'content' => $err
    ], 400);

  }


}

add_action('wp_ajax_call_powerzap', 'call_powerzap');
add_action('wp_ajax_nopriv_call_powerzap', 'call_powerzap');