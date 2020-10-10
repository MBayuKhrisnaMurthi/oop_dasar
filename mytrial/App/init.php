<!-- proses pemanggilan kelass (file) tanpa harus menggunakan require
1 class ditulis dalam 1 file 
sql_autoload_rehister
require once __dir__ -->

<?php

spl_autoload_register(function ($class){
    require __DIR__.'/Produk/'. $class .'.php';
});