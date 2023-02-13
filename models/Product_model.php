<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Product_model extends CI_Model{

    public function __construct(){
        
        parent::__construct();

    }



    //NOTA-> LAS ESTRELLAS SON PROMEDIADAS DE ACUERDO A LA VALORACION DEL LOS USUARIOS
    public function product_details_top_product_gallery(){

        $this->db->select('A.image_name, B.name, B.description, C.price, D.star, E.color');
        $this->db->from('image_has_product A');
        $this->db->join('product B', 'A.product_id = B.product_id');
        $this->db->join('price_has_product C', 'A.product_id = C.product_id');
        $this->db->join('valoration_has_product D', 'A.product_id = D.product_id');
        $this->db->join('color E',  ''.$_GET['color'].' = E.id');
        $this->db->where('A.product_id', $_GET['product']);
        $this->db->where('A.id_color', $_GET['color']);
        $query = $this->db->get();
        return $query->result_array();
        // $this->db->select('A.image_name, B.name, B.description, C.price');
        // $this->db->from('image_as_product A');
        // $this->db->join('product B', 'A.product_id = B.product_id');
        // $this->db->join('price_as_product C', 'A.product_id = C.product_id');
        // $this->db->where('A.product_id', $_GET['product']);
        // $query = $this->db->get();
        // return $query->result_array();

    }
/////////////////////////////////////////////////////////////////////////////

// capturamos el color del producto

        public function product_details_top_product_gallery_color(){

            $this->db->select('rute, id_color, product_id');
            $this->db->from('color_has_image');
            $this->db->where('product_id', $_GET['product']);
            $query = $this->db->get();
            return $query->result_array();

        }


        //tamaño del product

        public function  product_details_top_product_gallery_size(){

            $this->db->select('B.size');
            $this->db->from('size_has_product A');
            $this->db->join('size B', 'A.size_id = B.id');
            $this->db->where('A.product_id', $_GET['product']);
            $query = $this->db->get();
            return $query->result_array();

        }

        public function  product_details_top_product_gallery_breadcrumb(){

            $this->db->select('A.name, B.categorie_name');
            $this->db->from('product A');
            $this->db->join('header_middle_categorie B', 'A.categorie_id = B.id');
            $this->db->where('A.product_id', $_GET['product']);
            $query = $this->db->get();
            return $query->row_array();

        }

        public function  product_details_top_product_gallery_additional_information(){

            $this->db->select('description, additional_information, shipping_return');
            $this->db->from('additional_information');
            $this->db->where('product_id', $_GET['product']);
            $query = $this->db->get();
            return $query->row_array();

        }

}