<?php 

class Mahasiswa_model{
    private $dbh, $statment;

    public function __construct()
        {
          //Data Source Name
          $dsn =  'mysql:host=localhost;dbname=phpmvc';

          try{
            $this->dbh = new PDO($dsn, 'root', '');

          } catch (PDOException $e){
            die($e->getMessage());
          }
        }

    // private $mhs = [
    //     [
    //         "Nama" => "Gian Sonia",
    //         "NPM"   => "432007006190094",
    //         "email" => "giansonia555@gmail.com",
    //         "jurusan" => "IT"

    //     ],
    //     [
    //         "Nama" => "Gian Sonia",
    //         "NPM"   => "432007006190094",
    //         "email" => "giansonia555@gmail.com",
    //         "jurusan" => "IT"

    //     ],
    //     [
    //         "Nama" => "Gian Sonia",
    //         "NPM"   => "432007006190094",
    //         "email" => "giansonia555@gmail.com",
    //         "jurusan" => "IT"

    //     ]
       
            
    // ];

    public function getAllMahasiswa(){
        $this->statment = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->statment->execute();
        return $this->statment->fetchAll(PDO::FETCH_ASSOC);
    }
}