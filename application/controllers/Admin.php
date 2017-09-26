<?php header('Access-Control-Allow-Origin: *'); ?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public $data = array();

	public function index()
	{
		$this->load->view('login');
	}
	
	public function authentication()
	{
		$this->load->library('form_validation');

		$this->load->model('gestion_db');
		
		if ($this->gestion_db->check()) 
		{
			redirect('Gestion');
		}
	}

	public function log_out()
	{
		$this->load->library('session');
		$this->session->sess_destroy();
		$this->load->view('login');
	}







}
