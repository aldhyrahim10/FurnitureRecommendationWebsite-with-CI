<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guest_model extends CI_Model{

    public function read(){

        $this->db->select('*');
        $this->db->from('guest');

        $query = $this->db->get();

        return $query->result_array();
    }


}