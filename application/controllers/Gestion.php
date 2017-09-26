<?php header('Access-Control-Allow-Origin: *'); ?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gestion extends CI_Controller {
	public $data = array();

	public function index()
	{
		$this->load->model('gestion_db');
		
		$data['bars_data']=$this->gestion_db->count_monthly_visitors();
		
		$this->load->view('gestion_acceuil',$data);


	}

	public function Real_Time_Visitors()
	{
		$this->load->model('gestion_db');

		$s = $this->gestion_db->count_real_time_visitors();

		echo $s; 


	}

}