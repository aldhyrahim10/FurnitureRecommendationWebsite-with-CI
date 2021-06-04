<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recommendation extends CI_Controller {

    public function index(){

        $data = array(
            'judul' => 'Finder | Rekomendasi',
            'theme_page' => 'client/rekomendasi'
        );

        $this->load->view('theme/client/index', $data);
    }

    public function result(){

        $products_data = file_get_contents('assets/data.json');

        $product = json_decode($products_data);

        $kategori = $this->input->post('category');
        $panjang = $this->input->post('panjang');
        $lebar = $this->input->post('lebar');
        $harga = $this->input->post('harga');

        $data = array(
            'judul' => 'Finder | Result',
            'theme_page' => 'client/result',
            'kategori' => $kategori,
            'panjang' => $panjang,
            'lebar' => $lebar,
            'harga' => $harga,
            'product' => $product
        );

        $this->load->view('theme/client/index', $data);
    }
}