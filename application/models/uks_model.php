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
        // $this->db->where('id', $id);
        $this->db->delete('uks', ['id' => $id]);
    }
    public function getUksById($id)
    {
        //result array = semua data
        //row array = satu baris data
        return $this->db->get_where('uks', ['id' => $id])->row_array();

    }
    public function ubahDataUks()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true),
            "notelp" => $this->input->post('notelp', true)  
        ];
        
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('uks', $data);
    }
    public function cariDataUks()
    {
        $keyword = $this->input->post('keyword', true);
        
        //mencari berdasar seluruh field tabel
        $this->db->like('nama', $keyword);
        $this->db->or_like('alamat', $keyword);
        $this->db->or_like('notelp', $keyword);
        
        return $this->db->get('uks')->result_array();
    }
}