<?php 

class Home extends CI_Controller {

    public function index($nama = '')
    {
        $data['nav']['navacchome'] = $data['navacchome'] = 'active';
        $data['nav']['navaccabout'] = $data['navaccabout'] = '';
        $data['nav']['navaccuks'] = $data['navaccuks'] = '';

        $data['judul'] = 'Halaman Home';
        $data['nama'] = $nama;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav');
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');

    }
}
?>