<?php
//------------------------------------------------Penjelasan Singkat----------------------------------------------------------------------

//..............

//------------------------------------------------Akhir Penjelasan Singkat-----------------------------------------------------------------


    //Membuat Class Produk

use CetakInfoProduk as GlobalCetakInfoProduk;

class Produk{
        //Set Properties
    public $judul , $penulis , $penerbit , $harga, $waktuMain, $jmlHalaman, $tipe;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga", $waktuMain = 0, $jmlHalaman = 0, $tipe) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->waktuMain = $waktuMain; 
        $this->jmlHalaman = $jmlHalaman;
        $this->tipe = $tipe;
    }

        //Membuat Method Get untuk Class Produk
    public function getLebel(){
        return  "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap(){
        $str = "{$this->tipe} : {$this->judul} | {$this->getLebel()} (Rp. {$this->harga})";

        if($this->tipe == 'Komik'){
            $str .= " - {$this->jmlHalaman} halaman.";
        } else if($this->tipe == 'Game'){
            $str .= " ~ {$this->waktuMain} Jam.";
        }
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

$produk1 = new Produk("Naruto", "Masashi Kishimoto","Shonen Jump","30000",0,100,"Komik");
$produk2 = new Produk("Mobile Legend", "Moonton","Moonton","250000",0.5,0,"Game");

$infoProduk = new CetakInfoProduk();
echo "<b>Di cetak dengan Class CetakInfoProduk:</b><br>";
echo "<br>";
echo $infoProduk->cetak($produk1);
echo "<br>";
echo $infoProduk->cetak($produk2);
echo "<br><br>";

echo " <b>Di cetak dengan Function getInfoLengkap:</b> <br>";
echo "<br>";
echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();







?>