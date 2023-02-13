<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Header_model extends CI_Model{



    public function __construct(){
        
        parent::__construct();

    }



    public function Header_views_categorie(){

        $this->db->select('categorie_name');
        $this->db->from('header_middle_categorie');
        $query = $this->db->get();
        return $query->result_array();
 
    }





    

}