<?php
//------------------------------------------------Penjelasan Singkat----------------------------------------------------------------------

//Tutorial kali ini menjelaskan bagaiman cara membuat Class dan Method dalam OOPHP
//Di dalam setiap Class kita akan membuat Properties dan menbuat Method Get
//Selain itu disini kita juga akan belajar cara men instansisasi sebuah Class dengan Properties Default
//Kita juga dapat menimpa nilai dari properti dalam Class dengan Nilai yang baru kemudian meng instansiasinya
//didalam peng instansiasinya, kita dapat memanggi propertinya langsung atau kita dapat memanggilnya dengan Method Get yang telah di buat

//------------------------------------------------Akhir Penjelasan Singkat-----------------------------------------------------------------


    //Membuat Class Produk
class Produk{
        //Set Properties
    public $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga";

        //Membuat Method Get untuk Class Produk
    public function getLebel(){
        return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
    }
}
    //Akhir Class



//--------------------------------------------KOMENTAR---------------------------------------------------//
//     //Instansiasi Class Produk Baru
// $produk1 = new Produk();

//     //Meninpa atau mengganti salah satu nilai dari properti Class Produk
// $produk1->judul = "Naruto";

//     //Instansiasi Class Produk Baru
// $produk2 = new Produk();

//     //Meninpa atau mengganti salah satu nilai dari properti Class Produk
// $produk2->judul ="God of War";

//     //Membuat Properties Baru yang belum pernah ada di dalam Class Produk
// $produk2->hargajual = "Rp. 5000,-";


//     //Cek setiap variable yang di instansisasi
// var_dump(
//     $produk1,
//     $produk2->judul,
//     $produk2->hargajual
// );
//--------------------------------------------KOMENTAR---------------------------------------------------//


    
    //Instansiasi Class Produk Baru (Produk 3)
$produk3 = new Produk();

    //Menimpa setiap nilai properti dari Class Produk (Produk 3)
$produk3->judul = "Naruto";
$produk3->penulis = "Masahsi Kishimoto";
$produk3->penerbit = "Shounen Jump";
$produk3->harga = "Rp. 30.000";

    //Memanggil salahsatu properti yang telah di ganti nilainya secara langsung 
echo "Komik : $produk3->judul, $produk3->penulis, $produk3->penerbit, $produk3->harga";
echo "<br>";


    //Instansiasi Class Produk Baru (Produk 4)
$produk4 = new Produk();

    //Menimpa setiap nilai properti dari Class Produk (Produk 4)
$produk4->judul = "Mobile Legend";
$produk4->penulis = "Moonton";
$produk4->penerbit = "Monnton";
$produk4->harga = "Gratis";

    //Memanggil salahsatu properti yang telah di ganti nilainya dengan Methid Get
echo "Game : ".$produk4->getLebel();






?>