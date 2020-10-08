<?php
class Komik extends Produk{
    private $hlm;

    public function __construct($nama, $penulis, $penerbit, $harga, $hlm){
        parent::__construct($nama, $penulis, $penerbit, $harga);
        $this->hlm = $hlm;
    }

    public function getInfoProduk(){
        //komik : Naruto | Masashi Kisimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
        $prd = "Komik : " . parent::getInfo() . " - {$this->hlm} Halaman.";
        return $prd;
    }
}