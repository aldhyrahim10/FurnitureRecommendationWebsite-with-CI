<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback extends CI_Controller{

    public function __construct(){
        parent::__construct();

        // if (empty($this->session->userdata('nip'))) {
        //     redirect('user/login');
        // }

        $this->load->model(array('feedback_model'));
    }

    public function index(){
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('suggestion', 'Saran dan Kritik', 'required|trim');      
        
        if($this->form_validation->run() == false){
            
            $data = array(
                'judul' => 'Finder | Feedback',
                'theme_page' => 'client/feedback'
            );
    
            $this->load->view('theme/client/index', $data);

        } else{

            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $isi = $this->input->post('suggestion');

            $data = array(
                    'name' => $name,
                    'email' => $email,
                    'isi' => $isi
            );

            $this->db->insert('feedback', $data);

            redirect('feedback');

        }

        
    }

    public function list(){

        $feedback = $this->feedback_model->read();

        $data = array(
            'judul' => 'Finder | Guest List',
            'theme_page' => 'client/feedlist',
            'feedback' => $feedback
        );

        $this->load->view('theme/client/index', $data);
    }

}