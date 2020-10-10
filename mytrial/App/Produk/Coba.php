<?php

abstract class Coba{
    protected $nama, $penulis, $penerbit, $harga;
    public $diskon;

    public function __construct($nama = 'nama', $penulis = 'penulis', $penerbit = 'penerbit', $harga ='harga')
    {
        $this->nama = $nama;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
       
    abstract public function getInfo();

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }

    public function setPenulis($penulis){
        $this->penulis = $penulis;
    }

    public function getPenulis(){
        return $this->penulis;
    }

    public function setPenerbit($penerbit){
        $this->penerbit = $penerbit;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }

    public function setHarga($harga){
        $this->harga = $harga;
    }

    public function getharga(){
        return $this->harga;
    }
}