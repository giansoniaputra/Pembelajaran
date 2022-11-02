<?php

// class ContohStatic{
//     public static $angkat = 1;

//     public static function halo(){
//         return "Haloo ".self::$angkat++." Kali";
//     }
// }

// echo ContohStatic::$angkat."<br>";
// echo ContohStatic::halo()."<hr>";
// echo ContohStatic::halo(); 


class Contoh {
    public static $angka=1;

    public function halo(){
        return "Hallo ".self::$angka++." kali <hr>";
    }
}

$angka = new Contoh;
echo $angka->halo()."<br>";
echo $angka->halo()."<br>";

$angka2 = new Contoh;
echo $angka2->halo()."<br>";
echo $angka2->halo()."<br>";
?>