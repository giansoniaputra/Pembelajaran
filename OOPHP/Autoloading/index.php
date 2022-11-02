<?php
require_once 'App/init.php';

$produk1 = new Komik("Naruto", "Masashi Kishimoto","Shonen Jump","30000",100);
$produk2 = new Games("Mobile Legend", "Moonton","Moonton","250000",0.5);
 

$cetakProduk = new CetakInfoProduk();

$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();