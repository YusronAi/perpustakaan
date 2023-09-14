<?php
if(!session_id()) session_start(); // Jalankan session jika ada session

// Memanggil semua file mvc. Bootstrapping
require_once ('../app/init.php');

// Menjalankan class app
$app = new App;