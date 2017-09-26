<?php header('Access-Control-Allow-Origin: *'); ?>

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
		$this->load->model('connectes_db');
		$this->connectes_db->updates();

		$data['page']='acceuil';

		$this->load->model('cuisiner_db');
		//recuperer les catégories 
		$data['categories'] = $this->cuisiner_db->get_cate();
		// pour chaque categorie recuperer des recettes
		foreach ($data['categories'] as $categorie) 
		{
			$data['recettes'][$categorie->Nom] = $this->cuisiner_db->get_by_cate($categorie->ID,3,0);
		}

		$this->load->view('header',$data);
        $this->load->view('acceuil');
        $this->load->view('footer');
	}

	public function categorie($categorie,$page=0)
	{
		$this->load->model('connectes_db');
		$this->connectes_db->updates();

		$data['page']='categorie';

			$this->load->model('cuisiner_db');
		//recuperer les catégories 
		$data['categories'] = $this->cuisiner_db->get_cate();

		//recupere l'ID du categorie
		foreach ($data['categories'] as $cate) {
			# code...
			if ($cate->Nom == $categorie)
			{
				$ID = $cate->ID;
				break;
			}
		}

		//$data['count']=$this->cuisiner_db->get_count_cate($ID)->count;
		
		//recupere les recettes du categorie

		$data['recettes'] = $this->cuisiner_db->get_by_cate($ID,7,$page*7);

		//recupere le nombre total des recettes du categorie

		$data['count']=$this->cuisiner_db->get_count()->count;
		$data['current_page']=$page;
		// recuperer et trier les autres recettes
		$data['autres'] = $this->cuisiner_db->get_autres(6,0);
	
			$tmp = Array(); 
			foreach($data['autres'] as $recette) 
			    $tmp[] = $recette->date_publication; 
			array_multisort($tmp, $data['autres']); 

		$this->load->view('header',$data);
        $this->load->view('recettes');
        $this->load->view('footer');

		}

	public function recettes($page=0)
	{
		$this->load->model('connectes_db');
		$this->connectes_db->updates();

		$data['page']='recettes';

			$this->load->model('cuisiner_db');

		$data['categories'] = $this->cuisiner_db->get_cate();

		$data['recettes'] = $this->cuisiner_db->get_recettes(7,$page*7);

		$data['count']=$this->cuisiner_db->get_count()->count;
		$data['current_page']=$page;
		$data['autres'] = $this->cuisiner_db->get_autres(6,0);
	
		
			$tmp = Array(); 
			foreach($data['autres'] as $recette) 
			    $tmp[] = $recette->date_publication; 
			array_multisort($tmp, $data['autres']); 


		$this->load->view('header',$data);
        $this->load->view('recettes');
        $this->load->view('footer');

	}

	public function recette($ID)
	{
		$this->load->model('connectes_db');
		$this->connectes_db->updates();

		$data['page']='recette';
		
		$this->load->model('cuisiner_db');

		$data['categories'] = $this->cuisiner_db->get_cate();


		$data['recette']=$this->cuisiner_db->get_recette($ID);
		
		$data['autres'] = $this->cuisiner_db->get_autres(6,0);
	
		
			$tmp = Array(); 
			foreach($data['autres'] as $recette) 
			    $tmp[] = $recette->date_publication; 
			array_multisort($tmp, $data['autres']); 
			
		if(isset($data['recette']))
		{
			$this->load->view('header',$data);
        	$this->load->view('recette');
        	$this->load->view('footer');
		}
		else
		{
			$this->load->view('error_404');  	
		}
		

	}

	public function contact()
	{
		$this->load->model('connectes_db');
		$this->connectes_db->updates();

		$data['page']='contact';

			$this->load->model('cuisiner_db');

		$data['categories'] = $this->cuisiner_db->get_cate();

		
			
		$this->load->view('header',$data);
        $this->load->view('contact');
        $this->load->view('footer');


	}

	public function apropos()
	{
		$this->load->model('connectes_db');
		$this->connectes_db->updates();

		$data['page']='apropos';

			$this->load->model('cuisiner_db');

		$data['categories'] = $this->cuisiner_db->get_cate();
		$this->load->view('header',$data);
        $this->load->view('apropos');
        $this->load->view('footer');


	}

	function autocomplete()
	{
		$this->load->model('connectes_db');
		$this->connectes_db->visite_realtime();

		$this->load->model('cuisiner_db');

		//
		$propositions = $this->cuisiner_db->get_propositions($this->input->post('queryString'));
		
		if (count($propositions)>0) {
				
			echo  "<ul class=\"dropdown-menu show\" style=\"width : 90%; \">";
	                  
			foreach ($propositions as $proposition) 
			{
				echo  "<a class=\"dropdown-item\" onclick=\"fill(this.id)\" value=\"".$proposition->word."\" id='".$proposition->word."'>".$proposition->word."</a>";
				
			}
			foreach ($propositions as $proposition) 
			{
				
				echo  "<a class=\"dropdown-item\" onclick=\"fill(this.id)\" value=\"".$proposition->recette_name."\" id='".$proposition->recette_name."'>".$proposition->recette_name."</a>";
			}
			echo  "</ul>";

		}
	       
	} 
}
