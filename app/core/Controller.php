<?php

// Class utama yang mengatur semua controller
class Controller{

    // Method view untuk memanggil tampilan view
    public function view($view, $data = [])
    {
        // Panggil view di folder views
        require_once('../app/views/'. $view .'.php');
    }


    // Buat method model untuk controller home, about dan siswa
    public function model($model)
    {
        require_once('../app/models/' .$model. '.php');
        return new $model;
    }
}