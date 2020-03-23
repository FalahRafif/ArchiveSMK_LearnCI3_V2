<?php

class Uks extends CI_Controller {

    
    public function __construct()
    {
        // memanggil __ parent
        parent::__construct();
        $this->load->model('uks_model');

        
    }

    public function index()
    {

        $data['nav']['navacchome'] = $data['navacchome'] = '';
        $data['nav']['navaccabout'] = $data['navaccabout'] = '';
        $data['nav']['navaccuks'] = $data['navaccuks'] = 'active';
        
        $data['judul'] = "Home / index";

        $data['uks'] = $this->uks_model->getAllUks();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav', $data);
        $this->load->view('uks/index', $data);
        $this->load->view('templates/footer');
    }
}

?>