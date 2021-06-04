<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model{

    public function content(){
        // sql read
        $this->db->select('COUNT(id)  as total');
        $this->db->from('content');
        $query = $this->db->get();

		// $query -> result_array = mengirim data ke controller dalam bentuk semua data
        return $query->result_array();

    }

    public function guest(){
        // sql read
        $this->db->select('COUNT(id)  as total');
        $this->db->from('guest');
        $query = $this->db->get();

		// $query -> result_array = mengirim data ke controller dalam bentuk semua data
        return $query->result_array();

    }

    public function feedback(){
        // sql read
        $this->db->select('COUNT(id)  as total');
        $this->db->from('feedback');
        $query = $this->db->get();

		// $query -> result_array = mengirim data ke controller dalam bentuk semua data
        return $query->result_array();

    }
}