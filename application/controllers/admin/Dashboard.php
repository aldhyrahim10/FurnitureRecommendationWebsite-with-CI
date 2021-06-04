<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

    public function __construct(){
        parent::__construct();

        if (empty($this->session->userdata('nama'))) {
            redirect('admin');
        }

        $this->load->model('dashboard_model');

    }

    public function index(){

        $user = $this->session->userdata('nama');

        $content = $this->dashboard_model->content();
        $guest = $this->dashboard_model->guest();
        $feedback = $this->dashboard_model->feedback();

        $data = array(
            'judul' => 'Finder | Dashboard',
            'theme_page' => 'admin/dashboard',
            'user' => $user,
            'content' => $content,
            'guest' => $guest,
            'feedback' => $feedback 
        );

        $this->load->view('theme/admin/index', $data);
    }
}