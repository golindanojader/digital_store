<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Main_model extends CI_Model{

    public function __construct(){
        
        parent::__construct();

    }


    public function Main_views_middle_intro_section(){

        $this->db->select('intro-slide');
        $this->db->from('index-intro-section');
        $query = $this->db->get();
        return $query->result_array();
 
    }

    public function Main_views_middle_intro_banner(){

        $this->db->select('intro-banners');
        $this->db->from('index-intro-banners');
        $query = $this->db->get();
        return $query->result_array();
 
    }


    public function Main_views_middle_intro_brand(){

        $this->db->select('brand');
        $this->db->from('index-intro-brand');
        $query = $this->db->get();
        return $query->result_array();
 
    }


    public function Main_views_heading_center(){

        $this->db->select('nav-item');
        $this->db->from('index-heading-center');
        $query = $this->db->get();
        return $query->result_array();
 
    }




    public function Main_categories(){

        $this->db->select('banner');
        $this->db->from('index-categories');
        $query = $this->db->get();
        return $query->result_array();
 
    }


    public function Main_index_main_tab_content(){

        $this->db->select('product');
        $this->db->from('index-tab-content');
        $query = $this->db->get();
        return $query->result_array();
 
    }

    public function Main_views_heading_center_middle(){

        $this->db->select('nav-item');
        $this->db->from('index-heading-center-middle');
        $query = $this->db->get();
        return $query->result_array();
 
    }

    public function Main_index_main_tab_content_middle(){

        $this->db->select('product');
        $this->db->from('index-tab-content-middle');
        $query = $this->db->get();
        return $query->result_array();
 
    }


    public function Main_index_main_tab_content_middle_down(){

        $this->db->select('tab-pane');
        $this->db->from('index-heading-center-middle-down');
        $query = $this->db->get();
        return $query->result_array();
 
    }



    public function Main_index_icon_box(){

        $this->db->select('icon-box');
        $this->db->from('index-icon-box');
        $query = $this->db->get();
        return $query->result_array();
 
    }


    public function Main_index_blog_posts(){

        $this->db->select('article');
        $this->db->from('index-blog-posts');
        $query = $this->db->get();
        return $query->result_array();
 
    }

  

}