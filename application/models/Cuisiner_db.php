<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuisiner_db extends CI_Model {

        public function get_cate()
        {
                $query = $this->db->get('categorie');
                return $query->result();
        }

		public function get_all_recettes()
		{
            $query = $this->db->get('recette');
            return $query->result();
        }

        public function get_by_cate($ID_cate, $limit, $offset)
        {
        	$this->db->select('ID, Nom, meta_description, date_publication, nb_vue, lien_img');
        	
        	$this->db->order_by('date_publication', 'DESC');

        	$query = $this->db->get_where('recette', array('categorie' => $ID_cate , 'etat' => 'publiee'), $limit, $offset);

            return $query->result();

        }

}