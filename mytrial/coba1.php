<?php

abstract class Coba {
    private $nama, $penulis, $penerbit, $harga;
    public $diskon;

    public function __construct($nama = 'nama', $penulis = 'penulis', $penerbit = 'penerbit', $harga ='harga')
    {
        $this->nama = $nama;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    abstract public function getInfoProduk();
    
    
    public function getInfo(){
        $prd = "{$this->nama} | {$this->penulis}, {$this->penerbit} (Rp.{$this->harga})";
        return $prd;
    }

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

class Komik extends Coba {
    private $hlm;

    public function __construct($nama, $penulis, $penerbit, $harga, $hlm)
    {
        parent::__construct($nama, $penulis, $penerbit, $harga);
        $this->hlm = $hlm;
    }

    public function getInfoProduk(){
        //- Komik : Naruto | Masashi Kisimoto, Shonen Jump (30000) - 100 Halaman.
        $prd = "Komik : " . parent::getInfo() . "- {$this->hlm} Halaman.";
        return $prd;
    }
}

class Game extends Coba {
    private $jam;

    public function __construct($nama, $penulis, $penerbit, $harga, $jam)
    {
        parent::__construct($nama, $penulis, $penerbit, $harga);
        $this->jam = $jam;
    }

    public function getInfoProduk(){
        // - Game : Uncharted | Neil Druckmann, Sony Computer (250000) ~ 50 Jam.
        $prd = "Game : " . parent::getInfo() . "~ {$this->jam} Jam.";
        return $prd;
    }
}

class cetakInfoProduk{
    public $dataproduk = [];

    public function tambahdata(Coba $coba){
        //look stupid yg bener data produk = coba
        $this->dataproduk[] = $coba;
    }

    public function cetak(){
        $prd = 'Daftar Produk : </br>';

        foreach ($this->dataproduk as $p) {
            $prd .= '-'. $p->getInfoProduk() .'</br>';
        }
        return $prd;
    }
}


$coba1 = new Komik('Naruto', 'Masashi Kisimoto', 'Shonen Jump', 30000, 100);
$coba2 = new Game('Uncharted', 'Neil Druckmann', 'Sony Computer', 250000, 50);

$cetakinfoproduk = new cetakInfoProduk();
$cetakinfoproduk->tambahdata($coba1);
$cetakinfoproduk->tambahdata($coba2);
echo $cetakinfoproduk->cetak();
