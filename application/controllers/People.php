<?php

class People extends CI_Controller {

    
    
    
    public function index()
    {
        $data['nav']['navacchome'] = $data['navacchome'] = '';
        $data['nav']['navaccabout'] = $data['navaccabout'] = '';
        $data['nav']['navaccuks'] = $data['navaccuks'] = '';
        $data['nav']['navaccpeople'] = $data['navaccpeople'] = 'active';
        
        
        $data['judul'] = "People / index";
        
        $this->load->model('peoples_model','peoples');

        //pagination 
        $this->load->library('pagination');
        //pagination config
        $config['base_url'] = 'http://localhost/belajar_ulang/belajarCIunpas/people/index';
        $config['total_rows'] = $this->peoples->countAllRows();
        $config['per_page'] = 12;
        $config['num_links'] = 5;
        //styling
        $config['full_tag_open'] = '<nav aria-label="Page navigation example"> <ul class="pagination justify-content-center">';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="">';
        $config['cur_tag_close'] = '</a></li>';
        
        $config['dig_tag_open'] = '<li class="page-item">';
        $config['dig_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        $config['full_tag_close'] = '</ul></nav>';

        //initialize 
        $this->pagination->initialize($config);


        //mengambil data dari uri segment ke 3
        $data['start'] = $this->uri->segment(3);

        $data['peoples'] = $this->peoples->getPeoples($config['per_page'], $data['start']);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav', $data);
        $this->load->view('people/index', $data);
        $this->load->view('templates/footer');
    }
    
}

?>