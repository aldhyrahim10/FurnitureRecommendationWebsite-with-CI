<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller{

    public function __construct(){
        parent::__construct();

        // if (empty($this->session->userdata('nip'))) {
        //     redirect('user/login');
        // }

        $this->load->model(array('content_model'));
    }


    public function index(){

        $content = $this->content_model->read();

        $data = array(
            'judul' => 'Finder | Blog',
            'theme_page' => 'client/blog',
            'content' => $content
        );

        $this->load->view('theme/client/index', $data);
    }

    public function blogdetail(){

        $id = $this->uri->segment(3);

        $content = $this->content_model->read_single($id);

        $data = array (
            'judul' => 'Finder | Content',
            'theme_page' => 'client/content',
            'content' => $content
         );

         $this->load->view('theme/client/index', $data);

    }
}