<?php

class Produk {
    public  $nama = "nama",
            $kategori = "kategori",
            $penerbit = "penerbit",
            $harga = 0;
    public function getlabelname(){
        //untuk memanggil variable scope menggunakan $this
        return "$this->nama, $this->penerbit, $this->harga";
    }
}

$produk1 = new Produk();
$produk1->nama ="FIFA 21";
$produk1->kategori = "game";
$produk1->penerbit = "EA";
$produk1->harga = "500000";

$produk2 = new Produk();
$produk2->nama ="naruto";
$produk2->kategori = "komik";
$produk2->penerbit = "masashi kisimoto";
$produk2->harga = "30000";

echo "Game = ".$produk1->getlabelname();
echo "<br>";
echo "Komik = ".$produk2->getlabelname();