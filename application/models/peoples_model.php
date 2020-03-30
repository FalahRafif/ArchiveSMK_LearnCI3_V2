<?php

class Peoples_model extends CI_Model{
    public function getAllPeoples()
    {
        return $this->db->get('people')->result_array();
    }
    public function getPeoples($limit, $start)
    {
        return $this->db->get('people', $limit, $start)->result_array();
    }
    public function countAllRows()
    {
        return $this->db->get('people')->num_rows();
    }
}