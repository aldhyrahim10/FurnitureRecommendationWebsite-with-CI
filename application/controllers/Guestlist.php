<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guestlist extends CI_Controller {

    public function __construct(){
        parent::__construct();

        // if (empty($this->session->userdata('nip'))) {
        //     redirect('user/login');
        // }

        $this->load->model(array('guest_model'));
    }

    public function index(){

        $guest = $this->guest_model->read();

        $data = array(
            'judul' => 'Finder | Guest List',
            'theme_page' => 'client/guestlist',
            'guest' => $guest
        );

        $this->load->view('theme/client/index', $data);
    }

}