<?php

class Komik extends Coba implements getInfoProduk{
    private $hlm;

    public function __construct($nama, $penulis, $penerbit, $harga, $hlm)
    {
        parent::__construct($nama, $penulis, $penerbit, $harga);
        $this->hlm = $hlm;
    }

    public function getInfo(){
        $prd = "{$this->nama} | {$this->penulis}, {$this->penerbit} (Rp.{$this->harga})";
        return $prd;
    }

    public function getInfoProduk(){
        //- Komik : Naruto | Masashi Kisimoto, Shonen Jump (30000) - 100 Halaman.
        $prd = "Komik : " . $this->getInfo() . " - {$this->hlm} Halaman.";
        return $prd;
    }
}