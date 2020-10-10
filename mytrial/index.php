<?php
require "App/init.php";

$coba1 = new Komik('Naruto', 'Masashi Kisimoto', 'Shonen Jump', 30000, 100);
$coba2 = new Game('Uncharted', 'Neil Druckmann', 'Sony Computer', 250000, 50);

$cetakinfoproduk = new cetakInfoProduk();
$cetakinfoproduk->tambahdata($coba1);
$cetakinfoproduk->tambahdata($coba2);
echo $cetakinfoproduk->cetak();
