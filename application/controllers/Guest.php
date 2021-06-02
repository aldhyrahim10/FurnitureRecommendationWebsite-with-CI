<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guest extends CI_Controller{

    public function index(){

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('telpon', 'No. Telpon', 'required|trim');      
        
        if($this->form_validation->run() == false){
            
            $this->load->view('client/guest');

        } else{

            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $phone = $this->input->post('telpon');

            $data = array(
                    'nama' => $name,
                    'email' => $email,
                    'phone' => $phone
            );

            $this->db->insert('guest', $data);

            redirect('home');

        }
    }
}