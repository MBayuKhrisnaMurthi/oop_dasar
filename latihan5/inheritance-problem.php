<?php
//challange
//komik : Naruto | Masashi Kisimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
//Game : Uncharted | Neil Druckmann, Sony Computer (Rp.250000) ~ 50 Jam.

class Produk {
    public $nama, $penulis, $penerbit, $harga, $hlm, $jam, $type;

    public function __construct($nama = "nama" , $penulis = "penulis" , $penerbit = "penerbit", $harga = 0, $hlm = 0, $jam = 0 ,$type){
        $this->nama = $nama;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->hlm = $hlm;
        $this->jam = $jam;
        $this->type = $type;
    }

    public function getlabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getAll(){
        $pdk =  "{$this->type} | {$this->getlabel()} (Rp. {$this->harga}) ";
        if ($this->type == "Komik") {
            $pdk .= " - {$this->hlm} Halaman.";
        } else if (($this->type == "Game")) {
            $pdk .= " ~ {$this->jam} Jam.";
        }
        //jangan LUPA RETURN
        return $pdk;
    }
}

$produk1 = new Produk("Naruto", "Masashi Kisimoto", "Shonen Jump" , 30000, 100, null, "Komik");
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer" , 250000, null, 50, "Game");
echo $produk1->getAll();
echo "<br>";
echo $produk2->getAll();