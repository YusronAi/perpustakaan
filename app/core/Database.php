<?php

class Database{
    private $dbhost = Config::DB_HOST,
            $dbname = Config::DB_NAME,
            $dbuser = Config::DB_USER,
            $dbpass = Config::DB_PASS,
            $dbh,
            $statements;
            
            

    public function __construct()
    {
        $dsn = "mysql:host=$this->dbhost;dbname=$this->dbname";
        $option = [
            // Agar koneksi terjaga terus
            PDO::ATTR_PERSISTENT => TRUE,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try{
            $this->dbh = new PDO($dsn, $this->dbuser, $this->dbpass, $option);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    // Query untuk menjalankan apapun baik select, update, insert ataupun delete
    public function query($query)
    {
        // Pakai parameter $query unutuk memberikan tindakan pada data
        $this->statements = $this->dbh->prepare($query);
    }

    // Binding data, siapa tahu ada warenya atau istilahnya parameternya apa
    public function bind($param, $value, $type = null)
    {
        if( is_null($type)){
            switch(true){
                // Jika tipe integer
                case is_int($value) :
                    $type = PDO::PARAM_INT;
                    break;
                // Jika tipe boolean maka boolean
                case is_bool($value) :
                    $type = PDO::PARAM_BOOL;
                    break;
                // Jika tipe null maka param null
                case is_null($value) :
                    $type = PDO::PARAM_NULL;
                    break;
                // Selain itu string
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        
        // Kita bind value agar aman dan terhindar dari query injection
        $this->statements->bindValue($param, $value, $type);
    }

    // Eksekusi
    public function execute()
    {
        $this->statements->execute();
    }

    // Jika banyak
    public function resultSet()
    {
        $this->execute();
        return $this->statements->fetchAll(PDO::FETCH_ASSOC);
    }

    // Tapi jika satu
    public function resultSingle()
    {
        $this->execute();
        return $this->statements->fetch(PDO::FETCH_ASSOC);
    }

    // Untuk mengitung ada berapa baris ditambahkan
    public function affectedRows()
    {
        // RowCount -> punya PDO
        return $this->statements->rowCount();
    }




}