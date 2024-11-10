<?php

class Bentuk
{
    public $sisi;
    public $panjang;
    public $lebar;
}

class Persegi extends Bentuk
{
    public function luas()
    {
        return $this->sisi * $this->sisi;
    }
}

class PersegiPanjang extends Bentuk
{
    public function luas()
    {
        return $this->panjang * $this->lebar;
    }
}

$persegi = new Persegi();
$persegi->sisi = 10;
echo $persegi->luas();
