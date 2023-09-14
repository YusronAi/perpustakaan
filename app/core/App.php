<?php

class App{

    // Buat controller dan method default
    protected $controller = 'Home',
              $method = 'index',
              // Buat variable array default yakni kosong
              $params = [];
    
    

    // Memparsing url
    public function parseURL()
   {
        if(isset($_GET['url'])){
            // Bersihkan url dari tanda slash diakhir
            $url = rtrim($_GET['url'],'/');
            // Bersihkan url dari karakter" berbahaya
            $url = filter_var($url, FILTER_SANITIZE_URL);
            // Pecah url dengan delimiter slash
            $url = explode('/', $url);
        
            return $url;
        }
    }
        
    public function __construct()
    {   
        $url = $this->parseURL();
        
        // Cek apakah ada file 
        if($url == NULL){
            $url = ['$this->controller'];
        }
        
        // Cek apakah ada file dengan nama ini
        if(file_exists('../app/controllers/' .$url[0]. '.php')){
            // Ganti variable controller dengan array index ke 0
            $this->controller = $url[0];
            // Hilangkan controller dari array awal
            unset($url[0]);
        }

        // Panggil controller dan ambil
        require_once('../app/controllers/'. $this->controller .'.php');
        // Instansiasi class agar bisa panggil method
        $this->controller = new $this->controller;

        // Method ada di index array ke satu
        if(isset($url[1])){
            // Cek jika ada method di url indeks satu
            if(method_exists($this->controller, $url[1])){
                // Maka timpa method dengan url indeks satu
                $this->method = $url[1];
                // Hapus indeks array ke satu
                unset($url[1]);
            }
        }

        // paramater yang ditulis setelah controller dan method
        // Cek jika url kosong
        if(!empty($url)){
            // Ambil data dan masukkan ke array params
            $this->params = array_values($url);
        }

        // Jalankan controller dan method serta kirimkan params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    
}