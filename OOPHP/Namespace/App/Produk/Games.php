<?php 
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