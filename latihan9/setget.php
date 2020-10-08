<?php
//challange
//komik : Naruto | Masashi Kisimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
//Game : Uncharted | Neil Druckmann, Sony Computer (Rp.Sony Computer) ~ 50 Jam.

//class
class Product {
    //property
    private $nama, $penulis, $penerbit, $harga;

    public function __construct($nama, $penulis, $penerbit, $harga)
    {
        $this->nama = $nama;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    
    public function getProduct(){
        $prd = "{$this->nama} | {$this->penulis}, {$this->penerbit}, (Rp. {$this->harga})";
        return $prd;
    }

    //method
    public function setNama($nama){
        $this->nama = $nama;
    }

    public function setPenulis($penulis){
        $this->penulis = $penulis;
    }

    public function setPenerbit($penerbit){
        $this->penerbit = $penerbit;
    }

    public function setHarga($harga){
        $this->harga = $harga;
    }
    
    public function getNama(){
        return $this->nama;
    }

    public function getPenulis(){
        return $this->penulis;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }

    public function getHarga(){
        return $this->harga;
    }
}

class Komik extends Product {
    private $hlm;

    public function __construct($nama, $penulis, $penerbit, $harga, $hlm)
    {
        parent::__construct($nama, $penulis, $penerbit, $harga);
        $this->hlm = $hlm;
    }

    public function getProduct(){
        $prd = " Komik : " . parent::getProduct() ." - {$this->hlm} Halaman.";
        return $prd;
    }
}

class Game extends Product {
    private $jam;

    public function __construct($nama, $penulis, $penerbit, $harga, $jam)
    {
        parent::__construct($nama, $penulis, $penerbit, $harga);
        $this->jam = $jam;
    }

    public function getProduct(){
    $prd = " Game : " . parent::getProduct() ." ~ {$this->jam} Jam.";
        return $prd;
    }
}
//objek
$produk1 = new Product ("Naruto", "Masashi Kisimoto", "Shonen Jump", 30000 );
echo $produk1->getProduct();
echo "<br>";
$produk1->setHarga(100);
echo $produk1->getProduct();
echo "<hr>";
echo "<br>";
$produk1 = new Komik ("Naruto", "Masashi Kisimoto", "Shonen Jump", 30000, 100 );
echo $produk1->getProduct();
echo "<br>";
$produk2 = new Game ("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50 );
echo $produk2->getProduct();