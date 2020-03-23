<?php 

class Uks_model extends CI_Model {

    public function getAllUks()
    {
        //memanggil data di database
        return $query = $this->db->get('uks')->result_array();
        
    }
}