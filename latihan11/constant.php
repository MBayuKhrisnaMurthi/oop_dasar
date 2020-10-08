<?php
//sebuah identifier untuk menyimpan nilai seperti variable tetapi nilainya tidak dapat diubah
//define, constant

// define('NAMA', 'Bayu');
// echo NAMA;
// echo "<br>";
// const UMUR = "32";
// echo UMUR;


//const bisa disimpan didalam class
// class Coba {
//     const NAMA = 'Bayu K';
// }
// echo Coba::NAMA;

//magic constant ( __LINE__, FILE, DIR, FUNCTION, CLASS, TRAIT, METHOD, NAMESPACE ) yang tidak dapat diubah

// echo __LINE__;
// echo __FILE__;

// function coba() {
//     return __FUNCTION__;
// }
// echo coba();

class Coba111 {
    public $coba = __CLASS__;
}
$coba = new coba111();
echo $coba->coba;
?>