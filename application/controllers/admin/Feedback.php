<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback extends CI_Controller{

    public function index(){

        $data = array(
            'judul' => 'Finder | Feedback',
            'theme_page' => 'admin/feedback/index'
        );

        $this->load->view('theme/admin/index', $data);
    }

}