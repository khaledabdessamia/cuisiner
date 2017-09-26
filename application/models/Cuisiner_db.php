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

        public function get_count_cate($ID)
        {
            $query = $this->db->query('SELECT count(ID) count FROM `recette` WHERE `categorie` = '.$ID.' AND `etat` = \'publiee\' ');
            return $query->row();
        }

        
        public function get_count()
        {
            $query = $this->db->query('SELECT FOUND_ROWS() count');
            return $query->row();
        }

        public function get_by_cate($ID_cate, $limit, $offset)
        {
        	$this->db->select('ID, Nom, meta_description, date_publication, nb_vue, lien_img');
        	
        	$this->db->order_by('date_publication', 'DESC');

        	$query = $this->db->get_where('recette', array('categorie' => $ID_cate , 'etat' => 'publiee'), $limit, $offset);

            return $query->result();

        }
        public function get_recettes($limit, $offset)
        {
            # code...
            $this->db->select('ID, Nom,categorie, meta_description, date_publication, nb_vue, lien_img');
            $this->db->order_by('date_publication', 'DESC');
            $query = $this->db->get_where('recette', array('etat' => 'publiee'), $limit, $offset);
            return $query->result();
        }

        public function get_autres($limit, $offset)
        {
            # code...
            //$this->db->select('ID, Nom,categorie, meta_description, date_publication');
            $query = $this->db->query('SELECT ID, Nom,categorie, meta_description, date_publication, nb_vue, lien_img FROM `recette` WHERE `date_publication` < SUBDATE(CURDATE(), INTERVAL 30 DAY) AND `etat` = \'publiee\' order by rand() limit '.$limit);
            
            //$this->db->order_by('date_publication', 'RANDOM');
            //$query = $this->db->get_where('recette',array('etat' => 'publiee'), $limit, $offset);
            
            return $query->result();
        }

        public function get_recette($ID)
        {
            $query = $this->db->get_where('recette', array('ID' => $ID , 'etat' => 'publiee'));

            if (count($query->row())>0) {
                
                $row=$query->row();
                $query = $this->db->query('SELECT nb_vue from recette WHERE ID = '.$ID);
                $nb = $query->row(0)->nb_vue + 1;
                $query = $this->db->query('UPDATE recette SET nb_vue= '.$nb.' WHERE ID = '.$ID);
                return $row;
            }
            else
            {
                return false;
            }
        }

        public function get_recettes_by_mot($ID)
        {
            # code...
            
        }

        public function get_mots_by_recette($mot)
        {
            # code...
            
        }

        public function get_propositions($mot)
        {
            # code...

            $this->db->select('word,recette_name');
            #$this->db->where('word',1);
            $this->db->like('word',$mot);
            
            $query =$this->db->get('mot_cle', 5);
                      
            return $query->result();
        }
         
}