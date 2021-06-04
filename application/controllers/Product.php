<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller{

    public function index(){

        $products = file_get_contents('assets/data.json');
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

        $products_data = file_get_contents('assets/data.json');

        $product = json_decode($products_data);

        $data = array(
            'judul' => 'Finder | Product Detail',
            'theme_page' => 'client/product-detail',
            'product' => $product,
            'info' => $info
        );

        $this->load->view('theme/client/index', $data);
    }

    public function ruangtamu(){

        $products_data = file_get_contents('assets/data.json');

        $product = json_decode($products_data);

        $data = array(
            'judul' => 'Finder | Ruang Tamu',
            'theme_page' => 'client/product-kategori',
            'products' => $product,
            'kategori' => 'Ruang Tamu'
        );

        $this->load->view('theme/client/index', $data);

    }

    public function ruangkeluarga(){

        $products_data = file_get_contents('assets/data.json');

        $product = json_decode($products_data);

        $data = array(
            'judul' => 'Finder | Ruang Keluarga',
            'theme_page' => 'client/product-kategori',
            'products' => $product,
            'kategori' => 'Ruang Keluarga'
        );

        $this->load->view('theme/client/index', $data);

    }

    public function ruangtidur(){

        $products_data = file_get_contents('assets/data.json');

        $product = json_decode($products_data);

        $data = array(
            'judul' => 'Finder | Ruang Tidur',
            'theme_page' => 'client/product-kategori',
            'products' => $product,
            'kategori' => 'Kamar Tidur'
        );

        $this->load->view('theme/client/index', $data);

    }

    public function ruangdapur(){

        $products_data = file_get_contents('assets/data.json');

        $product = json_decode($products_data);

        $data = array(
            'judul' => 'Finder | Ruang Dapur',
            'theme_page' => 'client/product-kategori',
            'products' => $product,
            'kategori' => 'Ruang Dapur'
        );

        $this->load->view('theme/client/index', $data);

    }

    public function ruangmakan(){

        $products_data = file_get_contents('assets/data.json');

        $product = json_decode($products_data);

        $data = array(
            'judul' => 'Finder | Ruang Makan',
            'theme_page' => 'client/product-kategori',
            'products' => $product,
            'kategori' => 'Ruang Makan'
        );

        $this->load->view('theme/client/index', $data);

    }

    public function ruangmandi(){

        $products_data = file_get_contents('assets/data.json');

        $product = json_decode($products_data);

        $data = array(
            'judul' => 'Finder | Ruang Mandi',
            'theme_page' => 'client/product-kategori',
            'products' => $product,
            'kategori' => 'Kamar Mandi'
        );

        $this->load->view('theme/client/index', $data);

    }

    public function luarruang(){

        $products_data = file_get_contents('assets/data.json');

        $product = json_decode($products_data);

        $data = array(
            'judul' => 'Finder | Luar Ruang',
            'theme_page' => 'client/product-kategori',
            'products' => $product,
            'kategori' => 'Luar Ruang'
        );

        $this->load->view('theme/client/index', $data);

    }

    public function perkantoran(){

        $products_data = file_get_contents('assets/data.json');

        $product = json_decode($products_data);

        $data = array(
            'judul' => 'Finder | Perkantoran',
            'theme_page' => 'client/product-kategori',
            'products' => $product,
            'kategori' => 'Perkantoran'
        );

        $this->load->view('theme/client/index', $data);

    }
}