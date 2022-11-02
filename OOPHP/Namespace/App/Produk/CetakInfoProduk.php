<?php 
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