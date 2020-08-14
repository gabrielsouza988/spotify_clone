<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
  * @author Gabriel de Oliveira Souza <gabriel.souza988@hotmail.com>
  * @copyright 2020 - goWeb - Soluções para Web <http://goweb.com.br>
**/
class First extends CI_Controller {

	public function index()
	{
		$this->load->view('first/first');
	}
}
