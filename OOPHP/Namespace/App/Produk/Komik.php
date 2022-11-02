<?php 


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