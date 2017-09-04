<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acceuil extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public $data = array();

	public function index()
	{
		$data['page']='acceuil';

			$this->load->model('cuisiner_db');

		$data['categories'] = $this->cuisiner_db->get_cate();

			foreach ($data['categories'] as $categorie) {
				# code...
			
				$data['recettes'][$categorie->Nom] = $this->cuisiner_db->get_by_cate($categorie->ID,3,0);
			
			}
		
		
        $this->load->view('header',$data);
        $this->load->view('acceuil');
        $this->load->view('footer');
	}

	public function categori($categorie)
	{
		$data['page']='categorie';

			$this->load->model('cuisiner_db');

		$data['categories'] = $this->cuisiner_db->get_cate();

		foreach ($data['categories'] as $cate) {
			# code...
			if ($cate->Nom == $categorie)
			{
				$ID = $cate->ID;

			}
		}
			
		$data['recettes'] = $this->cuisiner_db->get_by_cate($ID,4,0);
			
			
		$this->load->view('header',$data);
        $this->load->view('recettes');
        $this->load->view('footer');

	}

	public function contact()
	{
		# code...
		$data['page']='contact';

			$this->load->model('cuisiner_db');

		$data['categories'] = $this->cuisiner_db->get_cate();

		
			
		$this->load->view('header',$data);
        $this->load->view('contact');
        $this->load->view('footer');


	}

	public function apropos()
	{
		# code...
		$data['page']='apropos';

			$this->load->model('cuisiner_db');

		$data['categories'] = $this->cuisiner_db->get_cate();
		$this->load->view('header',$data);
        $this->load->view('apropos');
        $this->load->view('footer');


	}
}
