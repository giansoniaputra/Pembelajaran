<?php

    //Membuat Class Produk(Class Parent)

class Produk{
        //Set Properties dengan visibility private agar property hanya bisa di pakai oleh class teretentu
    private $judul , $penulis , $penerbit;

    private $harga,  $diskon;

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
    public function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLebel()} (Rp. {$this->harga})";
        return $str;
    }
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
class Komik extends Produk{
        //set property khusus class Komik
    public $jmlHalaman;

        //Membuat constructor khusus untuk penginstansiasian property yang di perlukan class Komik
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "0", $jmlHalaman = 0){

            //Mengambil constructor dari class parent (Class Produk)
        parent::__construct($judul, $penulis, $penerbit , $harga );
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk(){
        $str = "Komik: ". parent::getInfoProduk() . " - {$this->jmlHalaman} halaman.";
        return $str;
    }
   
    
}
    //Membuat class Games (class child dari class produk)
class Games extends Produk{
        //set property khusus class Games
    public $waktuMain;
       
        //Membuat constructor khusus untuk penginstansiasian property yang di perlukan class Games
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "0", $waktuMain = 0){
            //Mengambil constructor dari class parent (Class Produk)
        parent::__construct($judul, $penulis , $penerbit , $harga);
        $this->waktuMain = $waktuMain;
    }
        
    public function getInfoProduk(){
        $str = "Games: ". parent::getInfoProduk()  ." ~ {$this->waktuMain} Jam.";
        return $str;
    }
    
}
    //Object Type

class CetakInfoProduk{
    public function cetak( Produk $produk ){
        if($produk->tipe == 'Game'){
            $str = "{$produk->tipe} : {$produk->judul} | {$produk->getLebel()} (Rp. {$produk->harga}) - {$produk->waktuMain} Jam";
        return $str;
        } else if ($produk->tipe == 'Komik'){
            $str = "{$produk->tipe} : {$produk->judul} | {$produk->getLebel()} (Rp. {$produk->harga}) - {$produk->jmlHalaman} Halaman";
        return $str;
        }
        
    }
}

//Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000) - 0 Jam ~ 100 Halaman
//Game : Mobile Legend | Moonton, Moonton (Rp. 250000) - 0.5 Jam ~ 0 Halaman

$produk1 = new Komik("Naruto", "Masashi Kishimoto","Shonen Jump","30000",100);
$produk2 = new Games("Mobile Legend", "Moonton","Moonton","250000",0.5);
 
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

//Nge Set dan Nge get
$produk1->setJudul("Boruto");
echo "Judul Baru : ".$produk1->getJudul();
echo "<hr>";

$produk1->setPenulis("Gian Sonia");
echo "Penulis Baru : ".$produk1->getPenulis();
echo "<hr>";

$produk1->setPenerbit("Moonton");
echo "Penerbit Baru : ".$produk1->getPenerbit();
echo "<hr>";

$produk1->setDiskon(90);
$produk1->setHarga(1000000);
echo "harga : ".$produk1->getHarga();
echo "<hr>";






?>