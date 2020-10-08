<?php

// class ContohStatic {
//     //property
//     public static $angka = 1;

//     //method
//     public static function halo(){
//         return "halo." . self::$angka++;
//     }
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<br>";
// echo ContohStatic::halo();

// member yang terikat dengan class bukan dengan object
// nilai static akan selalu tetap meskipun objek diinstasiasi berulang kali
// membuat kode menjadi procedural
// biasanya digunakan untuk membuat fungsi helper
// digunakan di class2 utility pada framework

class Contoh {
    public static $angka = 1;

    public function halo(){
        return "hallo ". self::$angka++. " kali. <br>";
    }
}

$obj = new Contoh();
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh();
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
?>