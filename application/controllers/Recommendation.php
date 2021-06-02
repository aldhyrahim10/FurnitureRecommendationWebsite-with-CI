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

        $data = array(
            'judul' => 'Finder | Result',
            'theme_page' => 'client/result'
        );

        $this->load->view('theme/client/index', $data);
    }
}