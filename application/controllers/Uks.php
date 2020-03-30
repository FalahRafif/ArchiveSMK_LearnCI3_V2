<?php

class Uks extends CI_Controller {

    
    public function __construct()
    {
        // memanggil __ parent
        parent::__construct();
        $this->load->model('uks_model');
        $this->load->library('form_validation');
        
        
    }
    
    public function index()
    {
        $data['nav']['navacchome'] = $data['navacchome'] = '';
        $data['nav']['navaccabout'] = $data['navaccabout'] = '';
        $data['nav']['navaccuks'] = $data['navaccuks'] = 'active';
        $data['nav']['navaccpeople'] = $data['navaccpeople'] = '';
        
        
        $data['judul'] = "Home / index";
        
        $data['uks'] = $this->uks_model->getAllUks();
        if( $this->input->post('keyword')){
            $data['uks'] = $this->uks_model->cariDataUks();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav', $data);
        $this->load->view('uks/index', $data);
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $data['nav']['navacchome'] = $data['navacchome'] = '';
        $data['nav']['navaccabout'] = $data['navaccabout'] = '';
        $data['nav']['navaccuks'] = $data['navaccuks'] = 'active';
        $data['nav']['navaccpeople'] = $data['navaccpeople'] = '';
        
        $data['judul'] = "Home / index";

        //validasi rule from
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('notelp', 'NoTelp', 'required|numeric');

        //validasi from
        if( $this->form_validation->run() == FALSE ){

            $this->load->view('templates/header', $data);
            $this->load->view('templates/nav', $data);
            $this->load->view('uks/tambah', $data);
            $this->load->view('templates/footer');
        }else{
            //insert data ke db
            $this->uks_model->tambahDataUks();
            //mengembalikan ke halaman
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('uks');
        }
    }
    public function hapus($id)
    {
        $this->uks_model->hapusDataUks($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('uks');
    }
    public function detail($id)
    {
        $data['nav']['navacchome'] = $data['navacchome'] = '';
        $data['nav']['navaccabout'] = $data['navaccabout'] = '';
        $data['nav']['navaccuks'] = $data['navaccuks'] = 'active';
        $data['nav']['navaccpeople'] = $data['navaccpeople'] = '';         
        
        $data['uks'] = $this->uks_model->getUksById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav', $data);
        $this->load->view('uks/detail', $data);
        $this->load->view('templates/footer');
    }
    public function ubah($id)
    {
        $data['nav']['navacchome'] = $data['navacchome'] = '';
        $data['nav']['navaccabout'] = $data['navaccabout'] = '';
        $data['nav']['navaccuks'] = $data['navaccuks'] = 'active';
        $data['nav']['navaccpeople'] = $data['navaccpeople'] = '';
        
        $data['judul'] = "Home / ubah";

        $data['uks'] = $this->uks_model->getUksById($id);
        //validasi rule from
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('notelp', 'NoTelp', 'required|numeric');

        //validasi from
        if( $this->form_validation->run() == FALSE ){

            $this->load->view('templates/header', $data);
            $this->load->view('templates/nav', $data);
            $this->load->view('uks/ubah', $data);
            $this->load->view('templates/footer');
        }else{
            //insert data ke db
            $this->uks_model->ubahDataUks();
            //mengembalikan ke halaman
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('uks');
        }
    }
}

?>