<?php

if (!defined('PATH')) exit;

class powerzap {

  const WHATSAPP_URL = 'https://api.whatsapp.com/send?phone=%1$s&text=%2$s';
  const MESSAGE_MODEL = 'Olá, me chamo %s. %s';
  const LAB_GRANATO_WHATSAPP_PHONE = '+5521971931590';
  const POWERZAP_TABLE_NAME = 'lab_gra_wpp_request';

  public $nome;
  public $email;
  public $mensagem;

  protected $db;

  public function __construct() {
    self::set_db();
  }

  protected function set_db() {
    global $wpdb;
    $this->db = $wpdb;
  }

  protected function _db() {
    return $this->db;
  }

  public function set_nome($nome) { 
    $this->nome = $nome;
  }

  public function set_email($email) {
    $this->email = $email;
  }

  public function set_mensagem($mensagem) {
    $this->mensagem = $mensagem;
  }

  protected function get_nome() {
    return $this->nome;
  }

  protected function get_email() {
    return $this->email;
  }

  protected function get_mensagem() {
    return $this->mensagem;
  }

  private function get_date() {
    return date('Y-m-d H:i:s');
  }

  public function insert_into_database() {
    
    $args = [
      'client_name' => self::get_nome(),
      'client_email' => self::get_email(),
      'client_message' => self::get_mensagem(),
      'INSERT_DATE' => self::get_date(),
    ];

    try {
      self::_db()->insert(
        self::POWERZAP_TABLE_NAME,
        $args  
      );
      return true;
    }
    catch(Exception $e) {
      return false;
    }

  }

  public function get_final_url() {

    $url = sprintf(
      self::WHATSAPP_URL,
      self::LAB_GRANATO_WHATSAPP_PHONE,
      sprintf(
        self::MESSAGE_MODEL,
        self::get_nome(),
        self::get_mensagem()
      )
    );

    return $url;

  }

}