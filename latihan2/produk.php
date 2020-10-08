<?php

class Produk {
    public $judul = "judul", 
           $penulis = "penulis", 
           $penerbit = "penerbit", 
           $harga = "harga";

    // method = function yang ada didalam class
        // public function sayHello(){
        // return "Hello World!";
    // }
}

//instance dari class
// $produk1 = new Produk();
// $produk1->judul = "narto";


// $produk2 = new Produk();
// $produk2->judul = "fifa";
// $produk2->bayu = "bayu";


$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis ="Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;
// var_dump($produk3);
echo "Komik : $produk3->penulis & $produk3->penerbit ";
echo "<br>";
