<?php

class Mahasiswa_model{
    // private $mhs=[
    //     [
    //         "nama" => "ahlis",
    //         "npm" => "666",
    //         "email" => "ahlis@gmail.com",
    //         "jurusan" => "sistem"
    //     ],
    //     [
    //         "nama" => "sahal",
    //         "npm" => "102",
    //         "email" => "sahal@gmail.com",
    //         "jurusan" => "teknik"
    //     ],
    //     [
    //         "nama" => "marf",
    //         "npm" => "222",
    //         "email" => "marf@gmail.com",
    //         "jurusan" => "akuntan"
    //     ]
    // ];
    private $dbh;//db handler
    private $stmt;

    public function __construct()
    {
        //data source name
        $dsn='mysql:host=localhost;dbname=phpmvc';

        try{
            $this->dbh = new PDO ($dsn, 'root','');
        } catch (PDOException $e){
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa(){
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}