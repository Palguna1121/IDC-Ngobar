<?php
require_once 'class.php';

function hitungLuasPersegiPanjang($panjang, $lebar) {
    $luas = $panjang * $lebar;
    echo $luas;
}

hitungLuasPersegiPanjang(10, 5) ;
echo "<br>";


$bangunRuang = new RumusBangunRuang();
$luasPersegi = $bangunRuang->hitungLuasPersegiPanjang(10, 5);
echo "Luas Persegi Panjang : $luasPersegi <br>";

$kelilingPersegi = $bangunRuang->hitungKelilingPersegiPanjang(10, 5);
echo "Keliling Persegi Panjang : $kelilingPersegi <br>";

$luasPersegi = $bangunRuang->hitungLuasPersegi(10);
echo "Luas Persegi : $luasPersegi <br>";