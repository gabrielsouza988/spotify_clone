<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Token_model extends CI_Model {

   public function curl($url, $token, $type = null){
		 if($type == null){
			 $type = 'GET';
		 }
    $curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => $url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => $type,
			CURLOPT_HTTPHEADER => array(
				"Authorization: Bearer {$token}",
				'Cookie: _ga=GA1.2.101825390.1604323079; sp_dc=AQCjSkgSs4JlbDbKUoRAKvhw9NUXqpSPQxwxn2ZodMSqaKM4HqqUZt380pQi9aX4RoXPkixOzZPsoQRODGNLVtibqLthTU4ECUdcxMxMyw; sp_key=ed5662d9-8c7d-4c3a-b9be-0a6090e4d83b; sp_landing=http%3A%2F%2Fopen.spotify.com%2Ftrack%2F6rqhFgbbKwnb9MLmUQDhG6; sp_t=5628ccef062ee6cb3cf2431a686538f2'
			),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		return json_decode($response) ;
   }

}
