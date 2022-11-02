<?php
//------------------------------------------------Penjelasan Singkat----------------------------------------------------------------------

//..............

//------------------------------------------------Akhir Penjelasan Singkat-----------------------------------------------------------------


    //Membuat Class Produk

class Produk{
        //Set Properties
    public $judul , $penulis , $penerbit , $harga, $waktuMain, $jmlHalaman, $tipe;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga" ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        
        
    }

        //Membuat Method Get untuk Class Produk
    public function getLebel(){
        return  "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk(){
        
        $str = "{$this->judul} | {$this->getLebel()} (Rp. {$this->harga})";
        // if($this->tipe == 'Komik'){
        //     $str .= " - {$this->jmlHalaman} halaman.";
        // } else if($this->tipe == 'Game'){
        //     $str .= " ~ {$this->waktuMain} Jam.";
        // }

        return $str;
    }
}

class Komik extends Produk{
    public $jmlHalaman;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "0", $jmlHalaman = 0){
        parent::__construct($judul, $penulis, $penerbit , $harga );
        $this->jmlHalaman = $jmlHalaman;
    }
    public function getInfoProduk(){
        $str = "Komik: ". parent::getInfoProduk() . " - {$this->jmlHalaman} halaman.";
        return $str;
    }
    
}

class Games extends Produk{
    public $waktuMain;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "0", $waktuMain = 0){
        parent::__construct($judul, $penulis , $penerbit , $harga);
        $this->waktuMain = $waktuMain;
    }
    public function getInfoProduk(){
        $str = "Games: ". parent::getInfoProduk()  ." ~ {$this->waktuMain} Jam.";
        return $str;
    }
    
}

    //Akhir Class


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

// $infoProduk = new CetakInfoProduk();
// echo "<b>Di cetak dengan Class CetakInfoProduk:</b><br>";
// echo "<br>";
// echo $infoProduk->cetak($produk1);
// echo "<br>";
// echo $infoProduk->cetak($produk2);
// echo "<br><br>";

// echo " <b>Di cetak dengan Function getInfoProduk:</b> <br>";
// echo "<br>";
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();







?>