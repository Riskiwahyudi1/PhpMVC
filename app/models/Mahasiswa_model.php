<?php

class Mahasiswa_model {
    private $table = 'mahasiswa';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAllMahasiswa(){
       $this->db->query('SELECT * FROM ' . $this->table);
       return $this->db->resultSet();
    }
    
    public function getMahasiswaById($id){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE Nim=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function tambahDataMahasiswa($data){
        $query = "INSERT INTO mahasiswa VALUES (:Nama, :Nim, :Jurusan)";

        $this->db->query($query);
        $this->db->bind('Nama', $data['nama']);
        $this->db->bind('Nim', $data['nim']);
        $this->db->bind('Jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();

    
    }
    public function hapusDataMahasiswa($nim){
        $query = 'DELETE FROM ' . $this->table . ' WHERE Nim=:id';

        $this->db->query($query);
        $this->db->bind('id', $nim);
        
        $this->db->execute();

        return $this->db->rowCount();
    }
    public function ubahDataMahasiswa($data){
        
        $query = 'UPDATE ' . $this->table . ' SET Nama=:nama, Jurusan=:jurusan WHERE Nim=:nim';

        $this->db->query($query);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jurusan', $data['jurusan']);
        
        $this->db->execute();
        
        return $this->db->rowCount();
    }
    public function cariDaftarMahasiswa() {
        
        $keyword = $_POST['keyword'];
        
        $query = 'SELECT * FROM mahasiswa WHERE Nama LIKE :keyword';
        
        $this->db->query($query);
        $this->db->bind(':keyword', "%$keyword%"); 
        return $this->db->resultSet();
    }
    
}