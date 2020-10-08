<?php
//challange
//komik : Naruto | Masashi Kisimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
//Game : Uncharted | Neil Druckmann, Sony Computer (Rp.250000) ~ 50 Jam.
class Produk {
    public $nama, $penulis, $penerbit;
    private $harga;
    protected $diskon = 0;

    public function __construct($nama = "nama", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $diskon = 0){
        $this->nama = $nama;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->diskon = $diskon;
    }

    public function getLabel(){
        $prd = "{$this->nama} | {$this->penulis}, {$this->penerbit} (Rp. {$this->harga})";
        return $prd;
    }

    public function getHarga(){
        return $this->harga - ($this->harga *  $this->diskon / 100);
    }

}

class Komik extends Produk {
    public $hlm;

    public function __construct($nama = "nama", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $hlm = 0 ){
        parent::__construct($nama, $penulis, $penerbit, $harga);
        $this->hlm = $hlm;
    }

    public function getLabel(){
        $prd = "Komik : ". parent::getlabel() ." - {$this->hlm} Halaman.";
        return $prd;
    }

    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }
    
}

$produk1 = new Komik ("Naruto", "Masashi Kisimoto", "Shonen Jump", 30000, 100);
echo $produk1->getlabel();
echo "<br>";
$produk1->setDiskon(50);
echo $produk1->getHarga();
?>