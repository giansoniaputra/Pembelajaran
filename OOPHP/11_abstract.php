<?php 

abstract class Buah{
    private $warna;

    abstract public function makan();

    public function setWarna($warna){
        $this->warna = $warna;
    }

    public function getWarna(){
        return $this->warna;
    }
}


class Apel extends Buah{
    public function makan(){

    }
}

class Jeruk extends Buah{
    public function makan(){
        
    }
}
?>