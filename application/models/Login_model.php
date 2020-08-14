<?php

class Login_model extends CI_Model {

  public $table = 'register';

  public function __construct(){
    parent::__construct();

  }

  public function autentica($data = array()){

    if(!empty($data['login']) && !empty($data['senha'])){

      // Primeiro valida o e-mail
      $return = $this->db->select('*')->where(array('login' => $data['login']))->get($this->table);

      if($return->num_rows()) {

        // usuário encontrado
        $user = $return->row_array();

        // faz a comparação da senha informada com a hash cadastrada;
        $validation = password_verify($data['senha'], $user['senha']);

        if ($validation)
          // sucesso
          return $user;
        else
          // sem sucesso
          return array();
      }
      return array();

    }
    return array();

  }

  public function checkUser() {
    try {
      $user = $this->session->userdata('usuario');
    }
    catch(\Exception $ex) {
      $user = array();
    }
    return $user;
  }

  public function user() {
    return @$this->session->userdata('usuario');
  }

  public function logout() {
    $this->session->unset_userdata('usuario');

    redirect(base_url());
    exit();
  }

}
