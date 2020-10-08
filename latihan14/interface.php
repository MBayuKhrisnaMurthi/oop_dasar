<?php
// kelas abstrack yang sama sekali tidak memiliki implementasi
// murni merupakan template untuk kelas turunannya
// tidak boleh memiliki property, hanya deklarasi method saja
// semua mthodnya harus didekalarasi dengan visibility public
// boleh deklarasi __construct
// seatu kelas boleh mengimplemtasi banyak interface

//dengan menggunakan type-hinting dapat melakukan dependency injection
//pada akhirnya akan mencapai polymorphism
interface getInfoProduk{
    public function getInfoProduk();
}

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

class Komik extends Produk{
    private $hlm;

    public function __construct($nama, $penulis, $penerbit, $harga, $hlm){
        parent::__construct($nama, $penulis, $penerbit, $harga);
        $this->hlm = $hlm;
    }

    public function getInfoProduk(){
        //komik : Naruto | Masashi Kisimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
        $prd = "Komik : " . parent::getInfo() . " - {$this->hlm} Halaman.";
        return $prd;
    }
}

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

class cetakInfoProduk{
    public $dataProduk = [];

    public function tambahProduk( Produk $produk){
        $this->dataProduk[] = $produk;
    }

    public function getInfoProduk(){
        $prd = "Daftar Produk : <br>";

        foreach ($this->dataProduk as $p) {
            $prd .= "- {$p->getInfoProduk()} <br>";
        }
        return $prd;
    }
}

$produk1 = new Komik("Naruto", "Masashi Kisimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);
// echo $produk2->getInfoProduk();


$cetakinfoproduk = new cetakInfoProduk();
$cetakinfoproduk->tambahProduk($produk1);
$cetakinfoproduk->tambahProduk($produk2);
echo $cetakinfoproduk->getInfoProduk();


?>