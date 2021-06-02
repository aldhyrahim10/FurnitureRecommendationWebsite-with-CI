<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{

    public function index(){

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        
        if($this->form_validation->run() == false){

            $this->load->view('admin/login');

        } else {

            $this->login_submit();
        }

    }

    private function login_submit(){

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $password_new = md5($password);

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        $password_verify = $this->db->get_where('user', ['password' => $password_new])->row_array();

        if($user){

            if($password_verify){

                $data = array(

                    'name' => $user['nama'],
                    'email' => $user['email']
                );

                $this->session->set_userdata($data);

                redirect('dashboard');

            } else {

                $this->session->set_flashdata('message', '');

                redirect('auth');
            }

        } else {

            $this->session->set_flashdata('message', '');

            redirect('auth');

        }

    }
}