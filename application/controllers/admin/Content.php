<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends CI_Controller{

    public function __construct(){
        parent::__construct();

        if (empty($this->session->userdata('nama'))) {
            redirect('admin');
        }

        $this->load->model(array('content_model'));
    }

    public function index(){
        $user = $this->session->userdata('nama');

        $content = $this->content_model->read();

        $data = array(
            'judul' => 'Finder | Content',
            'theme_page' => 'admin/content/index',
            'content' => $content,
            'user' => $user
        );

        $this->load->view('theme/admin/index', $data);
    }

    public function insert(){
        $user = $this->session->userdata('nama');
        
        $this->insert_submit();

        $data = array(
            'judul' => 'Finder | Tambah Content',
            'theme_page' => 'admin/content/create',
            'user' => $user
        );

        $this->load->view('theme/admin/index', $data);
    }


    
    public function insert_submit()
    {
        $user = $this->session->userdata('nama');
        if ($this->input->post('submit') == 'submit') {

            //aturan validasi input login
            $this->form_validation->set_rules('judul', 'Judul', 'required|trim');
            $this->form_validation->set_rules('shortdesc', 'Shortdesc', 'required|trim');
            $this->form_validation->set_rules('deskripsi', 'Deskripsi Content', 'required|trim');
            $this->form_validation->set_rules('tanggal', 'Tanggal', 'required|trim');

            //setting library upload
            $config = array (
                'upload_path'    => './upload_folder/',
                'allowed_types'  => 'gif|jpg|png',
                'max_size'       => 5000
            );

            $this->load->library('upload', $config);

            if ($this->form_validation->run() == TRUE) {
                
                //menangkap data input dari view

                $judul = $this->input->post('judul');
                $shortdesc = $this->input->post('shortdesc');
                $deskripsi = $this->input->post('deskripsi');
                $tanggal = $this->input->post('tanggal');
        
                //jika gagal upload
                if (!$this->upload->do_upload('image')) {
        
                    //respon alasan kenapa gagal upload
                    $response = $this->upload->display_errors();
        
                    // mengirim data ke view
					$error = array(
                        'response' => $response,
                        'judul' => 'Finder | Tambah Content',
                        'theme_page' => 'admin/content/create',
                        'user' => $user
                    );
    
                    $this->load->view('theme/admin/index', $error);
        
                //jika berhasil upload
                } else {
                    $this->upload->do_upload('image');
                    $upload_data = $this->upload->data('file_name');
        
                    //mengirim data ke model
                    $input = array(
                        //format : nama field/kolom table => data input dari view
                        'judul' => $judul,
                        'shortdesc' => $shortdesc,
                        'deskripsi' => $deskripsi,
                        'date' => $tanggal,
                        'image'    	=> $upload_data
                    );
        
                    //memanggil function insert pada kota model
                    //function insert berfungsi menyimpan/create data ke table buku di database

                    $data_content = $this->content_model->insert($input);
        
                    //mengembalikan halaman ke function read
                    // $this->session->set_tempdata('message', 'Data berhasil ditambahkan', 1);
                    
                    Redirect('admin/content'); 
                }
            } 
        }
    }

    public function update(){

        $user = $this->session->userdata('nama');
        // $this->update_submit();

        $id = $this->uri->segment(4);

        $content_single = $this->content_model->read_single($id);

        $data = array(
            'judul' => 'Finder | Update Content',
            'theme_page' => 'admin/content/update',
            'content_single' => $content_single,
            'user' => $user
        );

        $this->load->view('theme/admin/index', $data);

    }

    public function update_submit(){

        $user = $this->session->userdata('nama');

         //setting library upload
        $config['upload_path']          = './upload_folder/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 5000;
        $this->load->library('upload', $config);
 
        //menangkap data input dari view
        $judul = $this->input->post('judul');
        $shortdesc = $this->input->post('shortdesc');
        $deskripsi = $this->input->post('deskripsi');
        $tanggal = $this->input->post('tanggal');
 
         //menangkap id data yg dipilih dari view (parameter get)
         $id = $this->uri->segment(4);
 
         //function read berfungsi mengambil 1 data dari table kategori sesuai id yg dipilih
         $content_single = $this->content_model->read_single($id);

         //jika gagal upload
        if (!$this->upload->do_upload('image')) {

            //respon alasan kenapa gagal upload
            //respon alasan kenapa gagal upload
            $response = $this->upload->display_errors();
        
            // mengirim data ke view
            $error = array(
                'response' => $response,
                'judul' => 'Finder | Update Content',
                'theme_page' => 'admin/content/update',
                'content_single' => $content_single,
                'user' => $user
            );

            $this->load->view('theme/admin/index', $error);

         //jika berhasil upload
        } else {
            $this->upload->do_upload('image');
            
            $upload_data = $this->upload->data('file_name');
        
            //mengirim data ke model
                $input = array(
                    //format : nama field/kolom table => data input dari view
                    'judul' => $judul,
                    'shortdesc' => $shortdesc,
                    'deskripsi' => $deskripsi,
                    'date' => $tanggal,
                    'image'    	=> $upload_data
                    );
        
                //memanggil function insert pada kota model
                //function insert berfungsi menyimpan/create data ke table buku di database

                $data_content = $this->content_model->update($input, $id);
        
                //mengembalikan halaman ke function read
                // $this->session->set_tempdata('message', 'Data berhasil ditambahkan', 1);
            
                Redirect('admin/content'); 
        }
    }

    public function delete(){

        $user = $this->session->userdata('nama');

        $id = $this->uri->segment(4);

        $data = $this->content_model->delete($id);

        redirect('admin/content');

    }

}