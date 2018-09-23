<?php
class Logout extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url_helper');
		// Load session library
		$this->load->library('session');
		// Load database
		$this->load->model('login_model');
	}
	
	/* Logout from admin page and unset session data */
	public function index(){
		// Removing session data
		$sess_array = array('email' => '');
		$this->session->unset_userdata('logged_in', $sess_array);
		$data['message_display'] = 'Successfully Logout';
		return redirect('login');
	}
	
}