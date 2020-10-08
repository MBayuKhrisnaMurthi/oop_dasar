<?php

require_once 'App/init.php';

// $produk1 = new Komik("Naruto", "Masashi Kisimoto", "Shonen Jump", 30000, 100);
// $produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);
// // echo $produk2->getInfoProduk();


// $cetakinfoproduk = new cetakInfoProduk();
// $cetakinfoproduk->tambahProduk($produk1);
// $cetakinfoproduk->tambahProduk($produk2);
// echo $cetakinfoproduk->getInfoProduk();


// ============================================================
// new App\Service\User();
// echo "<br>";
// new App\Produk\User();

use App\Produk\User as userproduk;
use App\Service\User as userservice;
new userproduk();
echo "<br>";
new userservice();
