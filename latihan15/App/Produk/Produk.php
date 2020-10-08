<?php
abstract class Produk implements getInfoProduk {
    private $nama, $penulis, $penerbit, $harga;

    public function __construct($nama, $penulis, $penerbit, $harga)
    {
        $this->nama = $nama;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setNama($nama){
        $this->nama = $nama;
    }
    public function getNama(){
        return $this->nama;
    }

    public function setPenulis($penulis){
        $this->$penulis = $penulis;
    }
    public function getPenulis(){
        return $this->penulis;
    }

    public function setPenerbit($penerbit){
        $this->$penerbit = $penerbit;
    }
    public function getPenerbit(){
        return $this->penerbit;
    }

    public function setHarga($harga){
        $this->$harga = $harga;
    }
    public function getHarga(){
        return $this->harga;
    }
    
    public function getInfo(){
        $prd = "{$this->nama} | {$this->penulis}, {$this->penerbit} ({$this->harga})";
        return $prd;
    }
}