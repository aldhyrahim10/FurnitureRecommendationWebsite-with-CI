<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

    public function index(){

        $data = array(
            'judul' => 'Finder | Dashboard',
            'theme_page' => 'admin/dashboard'
        );

        $this->load->view('theme/admin/index', $data);
    }
}