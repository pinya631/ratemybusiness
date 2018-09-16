<?php
class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url_helper');
		
		// Load form validation library
		$this->load->library('form_validation');

		// Load session library
		$this->load->library('session');

		// Load database
		$this->load->model('login_model');
	}

	public function index(){
		
		/* Sets form validation rules */
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		/* Run form validation and submit */
		if ($this->form_validation->run() === TRUE){
			$data['user_info'] = $this->login_model->read_login_information($this->input->post('email',TRUE));
			
			/* verify the password and creates SESSION variables */
			if(password_verify($this->input->post('password',TRUE),$data['user_info']['user_password'])){
				
				$newdata = array(
					'email'  => $this->input->post('email',TRUE),
					'logged_in' => TRUE
					);
					
				$this->session->set_userdata($newdata);	
				return redirect('admin');
			}
		}
		
		/* Shows the login page */		
		$data['title'] = 'Login';		
		$this->load->view('login/index', $data);				
	}
	
}