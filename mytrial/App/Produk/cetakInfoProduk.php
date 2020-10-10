<?php

class cetakInfoProduk{
    public $dataproduk = [];

    public function tambahdata(Coba $coba){
        //look stupid yg bener data produk = coba
        $this->dataproduk[] = $coba;
    }

    public function cetak(){
        $prd = 'Daftar Produk : </br>';

        foreach ($this->dataproduk as $p) {
            $prd .= '- '. $p->getInfoProduk() .'</br>';
        }
        return $prd;
    }
}