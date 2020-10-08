<?php
//challange
//komik : Naruto | Masashi Kisimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
//Game : Uncharted | Neil Druckmann, Sony Computer (Rp.250000) ~ 50 Jam.

class Produk {
    public $nama, $penulis, $penerbit, $harga;

    public function __construct($nama = "nama", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
        $this->nama = $nama;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getProduc(){
        $prd = "{$this->nama}, {$this->penulis}, {$this->penerbit} ({$this->harga})";
        return $prd;
    }
}

class Komik extends Produk {
    public $hlm;
    
    public function __construct($nama = "nama", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $hlm = 0){
        parent::__construct($nama,$penulis,$penerbit,$harga);
        $this->hlm = $hlm;
    }

    public function getProduc(){
        $pdr = "Game : ". parent::getProduc() ." ~ {$this->hlm} Halaman";
        return $pdr;
    }
}

$Produk1 = new Komik("Naruto","Masashi Kisimoto","Shonen Jump","30000","100");


echo $Produk1->getProduc();

?>