<?php 

class About {
    public function index($nama ="Gian Sonia", $pekerjaan="Fornt End Developer", $umur = 32 ){
        echo "Hallo nama saya $nama, saya adalah $pekerjaan saya berumur $umur Tahun";
    }
    public function page(){
        echo 'about/page';
    }
}