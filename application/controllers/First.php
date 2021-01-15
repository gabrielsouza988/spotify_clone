<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
  * @author Gabriel de Oliveira Souza <gabriel.souza988@hotmail.com>
  * @copyright 2020 - goWeb - Soluções para Web <http://goweb.com.br>
**/
require 'vendor/autoload.php';
class First extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (isset($_SESSION['token'])) { 
			$api = new SpotifyWebAPI\SpotifyWebAPI();
	
			$accessToken = $_SESSION['token'];
	
			$api->setAccessToken($accessToken);
		}

		$this->load->model('token_model');
	}

	public function index()
	{
		$data['playlists'] = $this->token_model->curl('https://api.spotify.com/v1/me/playlists', $_SESSION['token']);
	
		$data['new_releases'] = $this->token_model->curl('https://api.spotify.com/v1/browse/new-releases', $_SESSION['token']);
		
		// var_dump($data['playlists']);

		$this->load->view('first/first', $data);
	}
}
