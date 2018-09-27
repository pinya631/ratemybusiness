<?php
class Company_model extends CI_Model {

	public function __construct(){
			$this->load->database();
	}
	
	/* Returns company data */
	public function get_companies($company_id = FALSE){
		
		if ($company_id === FALSE){
				$query = $this->db->get('company');
				return $query->result_array();
		}

		$query = $this->db->get_where('company', array('company_id' => $company_id));

		return $query->row_array();
	}
	
}

