<?php

interface InfoProduk{
    public function getInfoProduk();
}

    //Membuat Class Produk(Class Parent)

abstract class Produk{
        //Set Properties dengan visibility private agar property hanya bisa di pakai oleh class teretentu
    protected $judul , $penulis , $penerbit;

    protected $harga,  $diskon;

        //Buat constructor untuk memudahkan dalam peng instansiasian
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $diskon = 0 ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->diskon = $diskon;
        
        
    }

        //Membuat Method GetLabel untuk mempermudah dalam peng instansiasian property Penulis dan Penerbit
    public function getLebel(){
        return  "$this->penulis, $this->penerbit";
    }

        //Membuat Method getInfoProduk untuk mempermudah dalam peng instansiasian property Judul dan Harga
    
    abstract public function getInfo();
    
        //Accsessor Method
    public function getJudul(){
        return $this->judul;
    }

    public function getPenulis(){
        return $this->penulis;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }

    public function getHarga(){
        $str = $this->harga - ($this->harga * $this->diskon /100);
        return $str;
    }

    public function setJudul($judul){
        $this->judul = $judul;
    }

    public function setPenulis($penulis){
        $this->penulis = $penulis;
    }

    public function setPenerbit($penerbit){
        $this->penerbit = $penerbit;
    }

    public function setHarga($harga){
        $this->harga = $harga;
    }

    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }
        //Akhir Accessor Method
    
}
    //Membuat class Komik (class child dari class produk)
class Komik extends Produk implements InfoProduk {
        //set property khusus class Komik
    public $jmlHalaman;

        //Membuat constructor khusus untuk penginstansiasian property yang di perlukan class Komik
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "0", $jmlHalaman = 0){

            //Mengambil constructor dari class parent (Class Produk)
        parent::__construct($judul, $penulis, $penerbit , $harga );
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk(){
        $str = "Komik: ". $this->getInfo() . " - {$this->jmlHalaman} halaman.";
        return $str;
    }

    public function getInfo(){
        $str = "{$this->judul} | {$this->getLebel()} (Rp. {$this->harga})";
        return $str;
    }
   
    
}
    //Membuat class Games (class child dari class produk)
class Games extends Produk implements InfoProduk{
        //set property khusus class Games
    public $waktuMain;
       
        //Membuat constructor khusus untuk penginstansiasian property yang di perlukan class Games
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "0", $waktuMain = 0){
            //Mengambil constructor dari class parent (Class Produk)
        parent::__construct($judul, $penulis , $penerbit , $harga);
        $this->waktuMain = $waktuMain;
    } 
        
    public function getInfoProduk(){
        $str = "Games: ". $this->getInfo()  ." ~ {$this->waktuMain} Jam.";
        return $str;
    }

    public function getInfo(){
        $str = "{$this->judul} | {$this->getLebel()} (Rp. {$this->harga})";
        return $str;
    }
    
}
    //Object Type

class CetakInfoProduk{
    public $daftarProduk = [];

    public function tambahProduk( Produk $produk){
            $this->daftarProduk[] = $produk;
    }
    public function cetak(){
        $str = "DAFTAR PRODUK : <br>";

        foreach ($this->daftarProduk as $i){
            $str.="-  {$i->getInfoProduk()}<br>";
        }

        return $str;
        }
        
    }


//Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000) - 0 Jam ~ 100 Halaman
//Game : Mobile Legend | Moonton, Moonton (Rp. 250000) - 0.5 Jam ~ 0 Halaman

$produk1 = new Komik("Naruto", "Masashi Kishimoto","Shonen Jump","30000",100);
$produk2 = new Games("Mobile Legend", "Moonton","Moonton","250000",0.5);
 

$cetakProduk = new CetakInfoProduk();

$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();






?>