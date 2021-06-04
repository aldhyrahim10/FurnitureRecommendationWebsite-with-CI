<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guest extends CI_Controller{

    public function __construct(){
        parent::__construct();

        if (empty($this->session->userdata('nama'))) {
            redirect('admin');
        }

        $this->load->model(array('guest_model'));
    }

    public function index(){

        $user = $this->session->userdata('nama');

        $guest = $this->guest_model->read();

        $data = array(
            'judul' => 'Finder | Buku Tamu',
            'theme_page' => 'admin/guest/index',
            'guest' => $guest,
            'user' => $user
        );

        $this->load->view('theme/admin/index', $data);
    }

    
}