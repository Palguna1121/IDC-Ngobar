<?php

class RumusBangunRuang {
    public function hitungLuasPersegiPanjang($panjang, $lebar) {
        $volume = $panjang * $lebar;
        return $volume;
    }

    public function hitungKelilingPersegiPanjang($panjang, $lebar) {
        $keliling = 2 * ($panjang + $lebar);
        return $keliling;
    }

    public function hitungLuasPersegi($sisi) {
        $volume = $sisi * $sisi;
        return $volume;
    }
}


$bangunRuang = new RumusBangunRuang();
$luasPersegi = $bangunRuang->hitungLuasPersegiPanjang(10, 5);
echo "Luas Persegi Panjang : $luasPersegi <br>";

$kelilingPersegi = $bangunRuang->hitungKelilingPersegiPanjang(10, 5);
echo "Keliling Persegi Panjang : $kelilingPersegi <br>";

$luasPersegi = $bangunRuang->hitungLuasPersegi(10);
echo "Luas Persegi : $luasPersegi <br>";