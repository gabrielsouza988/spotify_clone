<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
  * @author Gabriel de Oliveira Souza <gabriel.souza988@hotmail.com>
  * @copyright 2020 - goWeb - Soluções para Web <http://goweb.com.br>
**/
require 'vendor/autoload.php';
class Callback extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		error_reporting(-1);
		ini_set('display_errors', 1);

		$session = new SpotifyWebAPI\Session(
			'71a370e157e7478eaff2ea017b03739a',
			'b3cf7c8dd0db4cc9b0ec35ec4805bcce',
			'http://localhost/spotify_clone/'
		);

		$api = new SpotifyWebAPI\SpotifyWebAPI();

		if (isset($_GET['code'])) {
				$session->requestAccessToken($_GET['code']);
				// $_SESSION['token'] = $api->setAccessToken($session->getAccessToken());

				// session_start();
				$_SESSION['token'] = $session->getAccessToken();

				redirect(base_url().'first');
		} else {
				$scopes = [
				'scope' => [
				'playlist-read-private',
				'user-read-private',
				'user-read-recently-played',
				'user-read-currently-playing',
				'user-read-playback-position',
				'user-read-email',
				'user-read-currently-playing',
				'user-read-playback-state',
				'playlist-read-collaborative',
						],
				];

				header('Location: ' . $session->getAuthorizeUrl($scopes));
		}


	// 	if (isset($_GET['code'])) {
	// 		$session->requestAccessToken($_GET['code']);
	// 		$api->setAccessToken($session->getAccessToken());
	
	// 		print_r($api->me());
	// } else {
	// 		$options = [
	// 				'scope' => [
	// 						'user-read-email',
	// 				],
	// 		];
	
	// 		header('Location: ' . $session->getAuthorizeUrl($options));
	// 		die();
	// }
	
	}
}
