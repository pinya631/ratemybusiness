<?php
class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url_helper');
	}

	public function index(){
		$this->load->model('registration_model');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		
		/* Shows the registration page */
		
		/* Sets form validation rules */
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.user_email]',
			array(
				'required'=>'Please provide the %s.',
				'valid_email'=>'Please provide the %s.',				
				'is_unique'=>'The email is already registered to the system.'			
				)
			);
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
		$this->form_validation->set_rules('firstname', 'First Name', 'required|alpha');
		$this->form_validation->set_rules('lastname', 'Last Name', 'required|alpha');
		$this->form_validation->set_rules('company', 'Company', 'required|is_unique[company.company_name]',
			array(
				'required'=>'Please provide the %s.',
				'is_unique'=>'The company is already registered to the system. Please contact the account administrator.'
				)
			);
		$this->form_validation->set_rules('year', 'Year Established', 'required|exact_length[4]|integer', 
			array(
				'required'=>'Please provide the %s.',
				'exact_length'=>'Year must be in a four digit format.',
				'integer'=>'Numbers only'
				) 
			);

		/* Run form validation and submit */
		if ($this->form_validation->run() === TRUE){
			$this->registration_model->register_contact(FALSE);
			$newdata = array(
					'email'  => $this->input->post('email',TRUE),
					'logged_in' => TRUE
					);
					
			$this->session->set_userdata($newdata);	
			return redirect('admin');
		}
		
		$data['title'] = 'Register';		
		$this->load->view('templates/header', $data);
		$this->load->view('register/index', $data);
		$this->load->view('templates/footer');		
				
	}
	
	public function superuser(){
		$this->load->model('registration_model');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		
		/* Shows the registration page */
		
		/* Sets form validation rules */
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.user_email]',
			array(
				'required'=>'Please provide the %s.',
				'valid_email'=>'Please provide the %s.',				
				'is_unique'=>'The email is already registered to the system.'			
				)
			);
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
		$this->form_validation->set_rules('firstname', 'First Name', 'required|alpha');
		$this->form_validation->set_rules('lastname', 'Last Name', 'required|alpha');
		
		/* Run form validation and submit */
		if ($this->form_validation->run() === TRUE){
			$this->registration_model->register_contact(TRUE);
			$newdata = array(
					'email'  => $this->input->post('email',TRUE),
					'logged_in' => TRUE
					);
					
			$this->session->set_userdata($newdata);	
			return redirect('admin');
		}
		
		$data['title'] = 'Register Admin';		
		$this->load->view('templates/header', $data);
		$this->load->view('register/superuser', $data);
		$this->load->view('templates/footer');		
				
	}
	
	
}