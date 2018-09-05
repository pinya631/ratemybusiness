<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

	public function __construct(){
			$this->load->database();
	}
	
	public function get_news($email = FALSE){
		if ($email === FALSE){
			$query = $this->db->get('access');
			return $query->result_array();
		}

		$query = $this->db->get_where('access', array('email' => $email));
		return $query->row_array();
	}
}