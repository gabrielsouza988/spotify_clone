<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
  * @author Gabriel de Oliveira Souza <gs988559@gmail.com>
  * @copyright 2020 - goWeb - Soluções para Web <http://goweb.com.br>
**/
class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model("Login_model", "login");
	}

	public function index()
	{

		if ($_SERVER['REQUEST_METHOD'] == "POST") {

			$user = $this->login->autentica($this->input->post());
			if ($user) {
				$this->session->set_userdata('usuario', $user);
				redirect('first');
			} else {
				$this->session->set_flashdata('error', 'Erro ao logar');
				$this->load->view('login');
			}
		} else {
			$logado = $this->login->checkUser();

			if (!$logado) {
				$this->load->view('login');
			} else {
				redirect('first');
				exit();
			}
		}
	}

	public function logout() {
		$this->login->logout();
	}


}
