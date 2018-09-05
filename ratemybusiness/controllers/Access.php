<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Access extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('users_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['users'] = $this->users_model->get_news();
				$data['title'] = 'Users';

				$this->load->view('templates/header', $data);
				$this->load->view('news/index', $data);
				$this->load->view('templates/footer');
        }

        public function view($email = NULL)
        {
                $data['users_access'] = $this->users_model->get_news($email);
        }
}