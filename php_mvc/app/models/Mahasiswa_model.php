<?php 

class Mahasiswa_model{
    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMahasiswa(){
       $this->db->query('SELECT * FROM ' . $this->table);
       return $this->db->resultSet();
    }

    public function getMahasiswaById($id){
        $this->db->query('SELECT * FROM ' . $this->table .' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
     }

     public function tambahDataMahasiswa($data)
     {
        $query = "INSERT INTO mahasiswa VALUES ('', :Nama, :NPM, :email, :jurusan)";
      //   var_dump($query);die;
        $this->db->query($query);
        $this->db->bind('Nama', $data['Nama']);
        $this->db->bind('NPM', $data['NPM']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();
        return $this->db->rowCount();
     }

     public function hapusDataMahasiswa($id)
     {
      $query = "DELETE FROM mahasiswa WHERE id=:id";
      $this->db->query($query);
      $this->db->bind('id', $id);
      $this->db->execute();
      return $this->db->rowCount();
     }

     public function ubahDataMahasiswa($data)
     {
        $query = "UPDATE mahasiswa SET Nama = :Nama, NPM = :NPM, email = :email, jurusan = :jurusan WHERE id = :id";
      //   var_dump($query);die;
        $this->db->query($query);
        $this->db->bind('Nama', $data['Nama']);
        $this->db->bind('NPM', $data['NPM']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();
        return $this->db->rowCount();
     }
}