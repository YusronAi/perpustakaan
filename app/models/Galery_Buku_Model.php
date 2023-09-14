<?php

class Galery_Buku_Model {
    private $db; // $dbh untuk menampung class database tadi

    // Konekkan database
    public function __construct()
    {
        $this->db = new Database;
    }
    
    public function getBukuById($id)
    {
        $this->db->query("SELECT * FROM tabel_buku WHERE id=:id");
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }
    
    public function getBuku()
    {
        // Ambil semua data dengan memasukkan query
        // $this->db->query("SELECT * FROM tabel_buku");
        $this->db->query("SELECT * FROM tabel_buku INNER JOIN tabel_kategori_buku on tabel_buku.id_kategori=tabel_kategori_buku.id_kategori");

        return $this->db->resultSet();
    }

    public function getkategoriById($id)
    {
        $this->db->query("SELECT * FROM tabel_kategori_buku WHERE id=:id");
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }
    
    public function getKategori()
    {
        // Ambil semua data dengan memasukkan query
        $this->db->query("SELECT * FROM tabel_kategori_buku");
        return $this->db->resultSet();
    }
}