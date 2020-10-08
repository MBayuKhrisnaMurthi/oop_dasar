<?php
//buat class
class Produk {
    public $nama, $kategori, $produksi, $harga;

    //construct
    public function __construct($nama = "nama" , $kategori = "kategori" , $produksi = "produksi" , $harga = 0) {
        $this->nama = $nama;
        $this->kategori = $kategori;
        $this->produksi = $produksi;
        $this->harga = $harga;
    }

    //buat getlabel nama dan produksi
    public function getlabel() {
        return "$this->nama, $this->produksi";
    }
}

class CetakInfo {
    public function cetak ( Produk $produk){
        //kategori | label, harga
    $prd = "{$produk->kategori} | {$produk->getlabel()} {$produk->harga}";
    return $prd;
    }
}

$produk1 = new Produk("GTA V", "Game", "Rockstar", 500000);

//getlabel
echo "Komik :". $produk1->getlabel();
echo "<br>";

//cetak info
$cetakinfo = new CetakInfo();
echo $cetakinfo->cetak($produk1);
