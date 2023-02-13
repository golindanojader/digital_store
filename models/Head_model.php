<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Head_model extends CI_Model{

    public function __construct(){
        
        parent::__construct();

        $this->load->library('session');
        
    }


    public function Head_views_currency(){

        $this->db->select('currency_language');
        $this->db->from('header_currency');
        $query = $this->db->get();
        return $query->result_array();
 
    }

    public function Head_views_language(){

        $this->db->select('language');
        $this->db->from('header_language');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function Head_views_phoneNumber(){

        $this->db->select('phone_number');
        $this->db->from('header_phone_number');
        $query = $this->db->get();
        return $query->result_array();
    }
}