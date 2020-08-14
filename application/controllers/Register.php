<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
  * @author Gabriel de Oliveira Souza <gs988559@gmail.com>
  * @copyright 2020 - goWeb - Soluções para Web <http://goweb.com.br>
**/
class Register extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('register_model');
	}

	public function index()
	{
		if (isset($_POST['register'])) {
			$this->register_model->insert([
				'nome' => $this->security->xss_clean($this->input->post('name')),
				'login' => $this->security->xss_clean($this->input->post('email')),
				'senha' => password_hash($this->security->xss_clean($this->input->post('password')), PASSWORD_BCRYPT)
			]);
		}

		$this->load->view('register');
	}

	public function isset_register(){
		$data = $this->register_model->fetch_usuario($this->input->post('email'));
		echo json_encode($data);
	}

}
