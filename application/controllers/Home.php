<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

    public function index(){

        $data = array(
            'judul' => 'Finder | Home',
            'theme_page' => 'client/home'
        );

        $this->load->view('theme/client/index', $data);
    }
}