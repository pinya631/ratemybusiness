<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
	
	var $login_data = array();

	public function __construct(){
		$this->load->database();
		$this->load->helper('date');
	}
	
	/* Read login information */
	public function read_login_information($email = NULL) {
		$query = $this->db->get_where('users', array('user_email' => $email));
		return $query->row_array();	
	} 

}