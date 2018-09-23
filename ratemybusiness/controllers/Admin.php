<?php
class Admin extends CI_Controller {

        public function __construct()
        {
			parent::__construct();
			$this->load->helper('url_helper');

			// Load session library
			$this->load->library('session');

        }

		public function index(){
			
				if(!isset($_SESSION['logged_in'])){
					return redirect('login');
				}
					
				$data['title'] = 'Welcome to Dashboard';

				$this->load->view('templates/header', $data);
				$this->load->view('admin/index', $data);
				$this->load->view('templates/footer');
				
		}		
}