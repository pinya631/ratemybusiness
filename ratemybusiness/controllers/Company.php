<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('company_model');
			$this->load->model('review_model');
			$this->load->helper('url_helper');
			$this->load->helper('form');
			$this->load->library('form_validation');
	}
		
	/* returns the profile and ratings for a single company */
	public function view($company_id = NULL){
		
		/* Get company details */
		$data['company'] = $this->company_model->get_companies($company_id);
		
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email',
			array(
				'required'=>'Please provide the %s.',
				'valid_email'=>'Please provide the %s.',							
				)
			);
		$this->form_validation->set_rules('firstname', 'First Name', 'required|alpha');
		$this->form_validation->set_rules('lastname', 'Last Name', 'required|alpha');
		$this->form_validation->set_rules('rating', 'Rating', 'required', 
			array('required'=>"Please rate the Company's performance") 
			);
		$this->form_validation->set_rules('comment', 'Comment', 'required');

		/* Run form validation and submit */
		if ($this->form_validation->run() === TRUE){
			$this->review_model->add_review($company_id);
		}

		if (empty($data['company']))
		{
				show_404();
		}
		
		$data['company_name'] = $data['company']['company_name'];
		
		
		/* Get review details */
		$data['reviews'] = $this->review_model->get_reviews($company_id);
		
		$this->load->view('templates/header', $data);
		$this->load->view('company/view', $data);
		$this->load->view('templates/footer');
	}
	/*
	public function submission(){
			/* Sets form validation rules 
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email',
			array(
				'required'=>'Please provide the %s.',
				'valid_email'=>'Please provide the %s.',							
				)
			);
		$this->form_validation->set_rules('firstname', 'First Name', 'required|alpha');
		$this->form_validation->set_rules('lastname', 'Last Name', 'required|alpha');
		$this->form_validation->set_rules('rating', 'Rating', 'required', 
			array('required'=>"Please rate the Company's performance") 
			);
		$this->form_validation->set_rules('comment', 'Comment', 'required');

		/* Run form validation and submit 
		if ($this->form_validation->run() === TRUE){
			//$this->review_model->add_review($company_id);
		}


	}*/
	
}
