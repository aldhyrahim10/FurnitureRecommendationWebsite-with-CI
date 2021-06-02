<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller{

    public function index(){

        $products = file_get_contents('assets/products.json');
        $products = json_decode($products);

        $data = array(
            'judul' => 'Finder | Product',
            'theme_page' => 'client/product',
            'products' => $products
        );

        $this->load->view('theme/client/index', $data);
    }

    public function productdetail(){

        $info = $this->uri->segment(3);

        $products = file_get_contents('assets/products.json');
        $products = json_decode($products);

        $product_detail = $products;

        $data = array(
            'judul' => 'Finder | Product Detail',
            'theme_page' => 'client/product-detail',
            'product' => $product_detail
        );

        $this->load->view('theme/client/index', $data);
    }
}