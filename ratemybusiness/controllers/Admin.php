<?php
class Admin extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper('url_helper');
        }

		public function index()
		{
				$data['title'] = 'Welcome to Dashboard';

				$this->load->view('templates/header', $data);
				$this->load->view('admin/index', $data);
				$this->load->view('templates/footer');
		}
		
}