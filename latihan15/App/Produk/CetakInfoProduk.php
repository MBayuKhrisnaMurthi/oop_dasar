<?php
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