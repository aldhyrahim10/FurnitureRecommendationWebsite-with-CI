<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback extends CI_Controller{

    public function __construct(){
        parent::__construct();

        if (empty($this->session->userdata('nama'))) {
            redirect('admin');
        }

        $this->load->model(array('feedback_model'));
    }

    public function index(){
        
        $user = $this->session->userdata('nama');

        $feedback = $this->feedback_model->read();

        $data = array(
            'judul' => 'Finder | Feedback',
            'theme_page' => 'admin/feedback/index',
            'feedback' => $feedback,
            'user' => $user
        );

        $this->load->view('theme/admin/index', $data);
    }

}