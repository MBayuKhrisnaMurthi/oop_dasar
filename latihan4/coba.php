<?php

class Produk{
    
    private $nama, $penulis, $penerbit, $harga;
    protected $diskon;
    public function __construct($nama = 'nama', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 'harga'){
        $this->nama = $nama;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getInfoProduk(){
        $prd = "{$this->nama} | {$this->penulis}, {$this->penerbit} (Rp.{$this->harga})";
        return $prd;
    }
}

class Game extends Produk{

    private $jam;
    public function __construct($nama, $penulis, $penerbit, $harga, $jam)
    {
        parent::__construct($nama, $penulis, $penerbit, $harga);
        $this->jam = $jam;
    }

    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }

    public function getInfoProduk()
    {
        //- Game : Uncharted | Neil Druckmann, Sony Computer (250000) ~ 50 Jam.
        $prd = "Game : ". parent::getInfoProduk() . " ~ {$this->jam} Jam." ;
        return $prd;
    }
}

class Komik extends Produk{
    
    private $hlm;
    public function __construct($nama, $penulis, $penerbit, $harga, $hlm){
        parent::__construct($nama, $penulis, $penerbit, $harga);
        $this->hlm = $hlm;
    }

    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }

    public function getInfoProduk()
    {
        // - Komik : Naruto | Masashi Kisimoto, Shonen Jump (30000) - 100 Halaman.
        $prd = "Komik : ". parent::getInfoProduk() ." - {$this->hlm} Halaman.";
        return $prd; 
    }
}

class Cetak{
    public $dataproduk = [];

    public function tambahProduk(produk $produk){
        $this->dataproduk[] = $produk;
    }

    public function getInfoProduk(){
        $prd = "Daftar Produk : <br>";

        foreach ($this->dataproduk as $p) {
            $prd .= "- {$p->getInfoProduk()} <br>";
        }
        return $prd;
    }
}

// standar tanpa cetak
// $produk1 = new Game ("GTA V", "Game", "Rockstar", 500000, 50);
// echo $produk1->getInfoProduk();

// echo "<br>";

// $produk2 = new Komik ("Naruto", "Masashi Kisimoto", "Shonen Jump", 30000, 100);
// echo $produk2->getInfoProduk();

$produk1 = new Komik("Naruto", "Masashi Kisimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);
// echo $produk2->getInfoProduk();
$cetakinfoproduk = new Cetak();
$cetakinfoproduk->tambahProduk($produk1);
$cetakinfoproduk->tambahProduk($produk2);
echo $cetakinfoproduk->getInfoProduk();
