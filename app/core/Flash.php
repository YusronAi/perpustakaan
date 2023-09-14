<?php

class Flasher{
    
    // Buat method static agar bisa dipanggil tanpa intansiasi
    public static function setFlash($pesan, $aksi, $tipe) // $tipe yakni variable buat kelas bootstrap berapa
    {
        // Set session
        $_SESSION['flash'] = [
            'pesan' => $pesan, 
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }
    
    public static function flash()
    {
        // Cek apakah ada session
        if(isset($_SESSION['flash'])){
            // Tampilkan pesan
            echo '<div class="alert alert-'.$_SESSION['flash']['tipe'].' alert-dismissible fade show position-absolute top-50 start-50 translate-middle alertstyle" role="alert">
                    Data ' .$_SESSION['flash']['pesan']. ' di' .$_SESSION['flash']['aksi']. '!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            // Kita hapus session, jadi gunakan sekali
            unset($_SESSION['flash']);
        }
    }
}