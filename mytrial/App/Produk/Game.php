<?php

class Game extends Coba implements getInfoProduk{
    private $jam;

    public function __construct($nama, $penulis, $penerbit, $harga, $jam)
    {
        parent::__construct($nama, $penulis, $penerbit, $harga);
        $this->jam = $jam;
    }

    public function getInfo(){
        $prd = "{$this->nama} | {$this->penulis}, {$this->penerbit} (Rp.{$this->harga})";
        return $prd;
    }

    public function getInfoProduk(){
        // - Game : Uncharted | Neil Druckmann, Sony Computer (250000) ~ 50 Jam.
        $prd = "Game : " . $this->getInfo() . " ~ {$this->jam} Jam.";
        return $prd;
    }
}
