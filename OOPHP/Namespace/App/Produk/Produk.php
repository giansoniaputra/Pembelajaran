<?php

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