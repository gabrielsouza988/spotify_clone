<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model {

  public $table = 'register';

   public function __construct(){
       $this->load->database();
   }

   public function insert($data = array()){
   	$this->db->insert('register', $data);
   	return $this->db->insert_id();
   }

   public function fetch_usuario(){
   	$this->db->select('*');
   	$this->db->from('register');
   	$this->db->where('login', $_POST['email']);
   	$query = $this->db->get();
   	return $query->row();
   }

}
