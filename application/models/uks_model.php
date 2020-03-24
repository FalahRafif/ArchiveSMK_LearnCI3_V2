<?php 

class Uks_model extends CI_Model {

    public function getAllUks()
    {
        //memanggil data di database
        return $query = $this->db->get('uks')->result_array();
        
    }
    public function tambahDataUks()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true),
            "notelp" => $this->input->post('notelp', true)  
        ];

        $this->db->insert('uks', $data);
    }
    public function hapusDataUks($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('uks');
    }
}