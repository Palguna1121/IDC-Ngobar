<?php

class Mobil{
    //inisialisasi properti mobil
    private $warna;
    private $merk;
    private $tahun;

    //membuat setter dan getter dari properti mobil
    //setter warna mobil
    public function setWarna($warna){
        $this->warna = $warna;
    }
    //get warna mobil
    public function getWarna(){
        return $this->warna;
    }

    //set merk mobil
    public function setMerk($merk){
        $this->merk = $merk;
    }
    //get merk mobil
    public function getMerk(){
        return $this->merk;
    }

    //set tahun mobil
    public function setTahun($tahun){
        $this->tahun = $tahun;
    }
    //get tahun mobil
    public function getTahun(){
        return $this->tahun;
    }
}

//membuat objek mobil
$mobil = new Mobil();

//set warna mobil
$mobil->setWarna("Merah");
$mobil->setMerk("Toyota");
$mobil->setTahun("2020");
//get warna mobil
echo $mobil->getWarna() . "\n";
echo $mobil->getMerk() . "\n";
echo $mobil->getTahun() . "\n";
//output: Merah