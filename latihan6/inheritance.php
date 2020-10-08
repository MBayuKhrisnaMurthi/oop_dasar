<?php
//challange
//komik : Naruto | Masashi Kisimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
//Game : Uncharted | Neil Druckmann, Sony Computer (Rp.250000) ~ 50 Jam.

class Produk {
    public $nama, $penulis, $penerbit, $harga, $hlm, $jam;

    public function __construct($nama = "nama" , $penulis = "penulis" , $penerbit = "penerbit", $harga = 0, $hlm = 0, $jam = 0 ){
        $this->nama = $nama;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->hlm = $hlm;
        $this->jam = $jam;
    }

    public function getlabel(){
        $pdk = "{$this->penulis}, {$this->penerbit} (Rp. {$this->harga})";
        return $pdk;
    }
}

class Komik extends Produk{
    public function getinfoKomik(){
        $pdk = "Komik : {$this->getlabel()} - {$this->hlm} Halaman";
        return $pdk;
    }
}

class Game extends Produk{
    public function getinfoGame(){
        $pdk = "Game : {$this->getlabel()} ~ {$this->jam} Jam";
        return $pdk;
    }
}

$produk1 = new Komik("Naruto", "Masashi Kisimoto", "Shonen Jump" , 30000, 100, null);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer" , 250000, null, 50);


echo $produk1->getinfoKomik();
echo "<br>";
echo $produk2->getinfoGame();