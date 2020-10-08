<?php
//challange
//komik : Naruto | Masashi Kisimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
//Game : Uncharted | Neil Druckmann, Sony Computer (Rp.250000) ~ 50 Jam.

class Produk {
    public $nama, $penulis, $penerbit, $harga, $hlm, $jam;

    public function __construct($nama = "nama" , $penulis = "penulis" , $penerbit = "penerbit", $harga = 0){
        $this->nama = $nama;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getlabel(){
        $pdk = "{$this->penulis}, {$this->penerbit} (Rp. {$this->harga})";
        return $pdk;
    }
}

class Komik extends Produk{
    public $hlm;

    public function __construct($nama = "nama" , $penulis = "penulis" , $penerbit = "penerbit", $harga = 0, $hlm = 0){
        parent::__construct($nama, $penulis, $penerbit, $harga);
        $this->hlm = $hlm; 
    }
    public function getlabel(){
        $pdk = "Komik : ". parent::getlabel() ." - {$this->hlm} Halaman";
        return $pdk;
    }
}

class Game extends Produk{
    public $jam;

    public function __construct($nama = "nama" , $penulis = "penulis" , $penerbit = "penerbit", $harga = 0, $jam = 0)
    {
        parent::__construct($nama, $penulis, $penerbit, $harga);
        $this->jam = $jam;
    }

    public function getlabel(){
        $pdk = "Game : ". parent::getlabel() ." ~ {$this->jam} Jam";
        return $pdk;
    }
}

$produk1 = new Komik("Naruto", "Masashi Kisimoto", "Shonen Jump" , 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer" , 250000, 50);


echo $produk1->getlabel();
echo "<br>";
echo $produk2->getlabel();