<?php

class Home extends CI_Controller {
    public function index(){
        $data['judul'] = 'Home';
        $data['nama'] = 'mas wahyuuu';
        $this->load->view('templates/header',$data);
        $this->load->view('home/index',$data);
        $this->load->view('templates/footer');
    }
}
