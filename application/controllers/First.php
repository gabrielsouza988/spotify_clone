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

		$data['recent'] = $this->token_model->curl('https://api.spotify.com/v1/me/player/recently-played?limit=4', $_SESSION['token']);
	
		$data['new_releases'] = $this->token_model->curl('https://api.spotify.com/v1/browse/new-releases', $_SESSION['token']);

		$data['tops_tracks_user'] = $this->token_model->curl('https://api.spotify.com/v1/me/player/recently-played?Limit=4', $_SESSION['token']);
		$data['currently_playing'] = $this->token_model->curl('https://api.spotify.com/v1/me/player/currently-playing', $_SESSION['token']);
		
		// var_dump($data['currently_playing']->item->name); NOME DA MUSICA
		// var_dump($data['currently_playing']->item->artists); NOME DOS ARTISTAS
		// var_dump($data['currently_playing']->item->album->images); IMAGENS DA MUSICA
		// var_dump($data['currently_playing']->item->album->external_urls->spotify); LINK DA MUSICA
		// die;

		$this->load->view('first/first', $data);
	}
}
