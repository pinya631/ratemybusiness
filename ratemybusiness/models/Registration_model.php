<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration_model extends CI_Model {
	
	var $registration_data = array();
	var $is_admin = FALSE;
	
	public function __construct(){
		$this->load->database();
		$this->load->helper('date');
	}
	
	/* Insert company data to the database */
	private function insert_company() {
	
		$data = array(
			'company_name' => $this->input->post('company',TRUE),
			'company_year_established' => $this->input->post('year',TRUE), 
			'company_date_created' => date('Y-m-d H:i:s',now())
		);
		$this->db->insert('company', $data);
		$this->registration_data['company_id'] = $this->db->insert_id();
	}

	/* Insert default access data to the database */
	public function insert_user($superuser = FALSE) {
		$data = array(
			'date_added' => date('Y-m-d H:i:s',now()),
			'user_first_name' => $this->input->post('firstname',TRUE),
			'user_last_name' => $this->input->post('lastname',TRUE),
			'user_email' => $this->input->post('email',TRUE),
			'user_password' => password_hash($this->input->post('password',TRUE), PASSWORD_DEFAULT),
			'is_admin' => $superuser,
		);
		
		$this->db->insert('users', $data);
		$this->registration_data['user_id'] = $this->db->insert_id();
	}
	
	private function insert_user_company() {
		$data = array(
			'ruc_user_id' => $this->registration_data['user_id'],
			'ruc_company_id' => $this->registration_data['company_id'],
		);
		
		$this->db->insert('ref_user_company', $data);
	}
	
	/* Register the contact */
	public function register_contact($superuser = FALSE){
		
		$this->insert_user($superuser);
			if($superuser === FALSE){
				$this->insert_company();
				$this->insert_user_company();
			}
		
	}
	
}