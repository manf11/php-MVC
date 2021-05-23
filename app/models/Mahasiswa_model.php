<?php

class Mahasiswa_model{
    private $table = 'mahasiswa';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

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
    // private $dbh;//db handler
    // private $stmt;

    public function getAllMahasiswa(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getMahasiswaById($id){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }
}