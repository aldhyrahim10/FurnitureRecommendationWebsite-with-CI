<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content_model extends CI_Model{

    public function read(){

        $this->db->select('*');
        $this->db->from('content');

        $query = $this->db->get();

        return $query->result_array();
    }
    
    public function insert($input){

        return $this->db->insert('content',$input); 
    }

    public function read_single($id){

        $this->db->select('*');
        $this->db->from('content');
        $this->db->where('id',$id);

        $query = $this->db->get();

        return $query->row_array();
    }

    public function update($input,$id){

        $this->db->where('id',$id);
    
        return $this->db->update('content', $input);
    }

    public function delete($id){

        $this->db->where('id',$id);

        return $this->db->delete('content');
    }

}