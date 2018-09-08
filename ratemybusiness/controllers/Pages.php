<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('company_model');
			$this->load->helper('url_helper');
	}
	
	public function index(){
			$data['companies'] = $this->company_model->get_companies();
			$data['title'] = 'Companies';

			$this->load->view('templates/header', $data);
			$this->load->view('pages/index', $data);
			$this->load->view('templates/footer');
	}
	
	public function view($page = 'home'){
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
	}
}
