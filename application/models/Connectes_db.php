<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Connectes_db extends CI_Model {
	
	public function updates()
	{
		$this->visite_realtime();
		$this->visite_mois();

	}

	public function visite_realtime()
	{
		// -------
		// on vérifie si l'IP se trouve déjà dans la table.
		// Pour faire ça, on n'a qu'à compter le nombre d'entrées dont le champ "ip" est l'adresse IP du visiteur.
		$query = $this->db->query('
		SELECT COUNT(*) AS nbre FROM connectes WHERE ip=\'' . $this->input->ip_address() . '\''
		);

		if ($query->row()->nbre == 0) // L'IP ne se trouve pas dans la table, on va l'ajouter.
		{
		    $query = $this->db->query('
		INSERT INTO connectes VALUES(\'' . $this->input->ip_address() . '\', ' . time() . ')');
		}
		else // L'IP se trouve déjà dans la table, on met juste à jour le timestamp.
		{
		    $query = $this->db->query('
		UPDATE connectes SET timestamp=' . time() . ' WHERE ip=\''.$this->input->ip_address().'\'');
		}
		return ;	
	}

	public function visite_mois()
	{
		$query = $this->db->query('
		SELECT * FROM visites_mois WHERE mois = Month(NOW()) AND annee = YEAR(NOW())'
		);
		if (count($query->row()) == 0)
			{
		    $query = $this->db->query('
		INSERT INTO visites_mois VALUES(Month(NOW()),YEAR(NOW()),NOW(),1)
		');
		}
		else
		{
			$nb= $query->row()->nbre_visites + 1 ; 
		    $query = $this->db->query('
		UPDATE visites_mois SET nbre_visites = ' . $nb . ' WHERE mois = Month(NOW()) AND annee = YEAR(NOW())');
		}
		return ;
	}

	
}