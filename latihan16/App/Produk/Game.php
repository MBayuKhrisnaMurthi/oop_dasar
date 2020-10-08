<?php
class Game extends Produk{
    private $jam;

    public function __construct($nama, $penulis, $penerbit, $harga, $jam){
        parent::__construct($nama, $penulis, $penerbit, $harga);
        $this->jam = $jam;
    }

    public function getInfoProduk(){
        //Game : Uncharted | Neil Druckmann, Sony Computer (Rp.250000) ~ 50 Jam.
        $prd = "Game : " . parent::getInfo() . " ~ {$this->jam} Jam.";
        return $prd;
    }
}