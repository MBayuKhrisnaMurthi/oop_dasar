<?php
class Produk {
    public $nama, $kategori, $penulis, $penerbit, $harga;

    public function __construct($nama = "Nama", $kategori = "Kategori", $penulis = "Penulis", $penerbit = "Penerbit", $harga = "Harga")
    {
        $this->nama = $nama;
        $this->kategori = $kategori;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;        
    }
}
$produk1 = new Produk("GOW 4","Game","rockstar");
var_dump($produk1);
?>