<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gestion_db extends CI_Model {

	public function check()
	{
		
		if ($this->input->post('submit')) {

			$this->form_validation->set_rules('Email','Email','trim|valid_email|required',
				array(
						'required' => 'Vous devez introduire un %s.',
						'valid_email' => 'Vous devez introduire un E-mail valide.'
			)
			);
			$this->form_validation->set_rules('Password','Password','required|differs[Email]|min_length[7]',
				array(
						'required' => 'Vous devez introduire votre mot de passe .',
						'differs' => 'le mot de passe ne doit pas etre l\'Email . '
			)
			);
			
			if ($this->form_validation->run()) {

			    $query = $this->db->query('

					SELECT * 
					FROM `administrateurs` 
					WHERE `e_mail` =\''.$this->input->post('Email').'\'');
	
			    if (count($query->result()) > 0) {

			    	$password = $query->row()->password;
			    	
			    	if ($password == $this->_hash($this->input->post('Password'))) {

			    		// create a session 
			    		$this->load->library('session');
			    		$newdata = array(
						        'username'  => 'khaled',
						        'email'     => 'khaled@some-site.com',
						        'logged_in' => TRUE
						);
						$this->session->set_userdata($newdata);
						return true;
					}
					else
					{
						//wrong password
						$this->load->view('login');
						//return false;
					}
			    }
				else{
					//email n'existe pas 
					$this->load->view('login');
				}
			}
			else
			{
				$this->load->view('login');
					return false;
			}

		}
	}

	public function _hash($string)
	{
		
		$key='s2Pvk5IeyFaX71YQWH8G9gNnGC1tAXLM';

		return hash('sha512', $string.$key); 
	}

	public function count_real_time_visitors()
	{
		// -------
		// ÉTAPE 1 : on supprime toutes les entrées dont le timestamp est plus vieux que 		2 minutes.

		// On stocke dans une variable le timestamp qu'il était il y a 2 minutes :
		$timestamp_2min = time() - (60 * 2); // 60 * 2 = nombre de secondes écoulées en 2 minutes

	$query = $this->db->query('DELETE FROM connectes WHERE timestamp < ' . $timestamp_2min);
	  
		// -------
		// ÉTAPE 2 : on compte le nombre d'IP stockées dans la table. C'est le nombre de visiteurs connectés.
		
		$query = $this->db->query('SELECT COUNT(*) AS nbre FROM connectes');
		
		// Ouf ! On n'a plus qu'à afficher le nombre de connectés !
		// echo '<p>Il y a actuellement ' . $donnees['nbre'] . ' visiteurs connectés sur mon site !</p>';
		
		return  $query->row()->nbre;
	
	}

	public function count_monthly_visitors()
	{
		$query=$this->db->query('SELECT * FROM `visites_mois` ORDER BY `date_edition` limit 12');
		$data_bars='';
		foreach ($query->result() as $row) {
			$data_bars=$data_bars.',["'.$this->mois_corespan($row->mois).' '.$row->annee.'",'.$row->nbre_visites.']';	
		}
		$data_bars = substr($data_bars,1);
		$data_bars = '['.$data_bars.']';
		return $data_bars;
		
	}

	public function mois_corespan($value)
	{
		switch ($value) {
			case 1:
				return "Janvier";
				break;			
			case 2:
				return  "Février";
				break;
			case 3:
				return  "Mars";
				break;
			case 4:
				return  "Avril";
				break;
			case 5:
				return  "Mai";
				break;
			case 6:
				return  "Juin";
				break;
			case 7:
				return "Juillet";
				break;
			case 8:
				return  "Août";
				break;
			case 9:
				return "Septembre";
				break;
			case 10:
				return "Octobre";
				break;
			case 11:
				return "Novembre";
				break;
			case 12:
				return  "Décembre";
				break;
			default:
				return"";
				break;
		}
	}
}