<?php
//------------------------------------------------Penjelasan Singkat----------------------------------------------------------------------

//..............

//------------------------------------------------Akhir Penjelasan Singkat-----------------------------------------------------------------


    //Membuat Class Produk
class Produk{
        //Set Properties
    public $judul , $penulis , $penerbit , $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga") {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

        //Membuat Method Get untuk Class Produk
    public function getLebel(){
        return  "$this->judul, $this->penulis, $this->penerbit, $this->harga";
    }
}
    //Akhir Class


    
    //Instansiasi Class Produk Baru (Produk 3)
$produk1 = new Produk("Naruto","Masashi Kisimoto","Shonen Jump","Rp. 30.000");
echo $produk1->getLebel();
echo "<br>";


    //Instansiasi Class Produk Baru (Produk 4)
$produk2 = new Produk("Mobile Legend","Moonton","Monnton","Gratis");
echo $produk2->getLebel();






?>