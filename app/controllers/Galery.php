<?php

class Galery extends Controller{
    public function index()
    {
        $data['judul'] = 'Galery Buku';
        $data['tabel_buku'] = $this->model('Galery_Buku_Model')->getBuku();

   
        $this->view('galery/index', $data);
        $this->view('templates/footer');
    }
}