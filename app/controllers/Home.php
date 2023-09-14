<?php

// Controler dan method default
class Home extends Controller{
    public function index()
    {
        $data['judul'] = 'Home';
        // Panggil user_model dengan model dan panggil method getuser()
        $data['nama'] = $this->model('User_model')->getUser();

        // Memanggil view dari folder views dengan memanggil method view
        // Rangkai sesuai urutan
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}