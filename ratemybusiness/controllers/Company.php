<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('company_model');
			$this->load->helper('url_helper');
	}
		
	public function view($company_id = NULL){
			$data['company'] = $this->company_model->get_companies($company_id);

			if (empty($data['company']))
			{
					show_404();
			}

			$data['company_name'] = $data['company']['company_name'];

			$this->load->view('templates/header', $data);
			$this->load->view('company/view', $data);
			$this->load->view('templates/footer');
	}
}
