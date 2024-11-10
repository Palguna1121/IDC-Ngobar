<?php

abstract class Hewan
{
    // Properti umum semua hewan
    protected $nama;
    protected $jenis;

    // Konstruktor untuk inisialisasi nama dan jenis
    public function __construct($nama, $jenis)
    {
        $this->nama = $nama;
        $this->jenis = $jenis;
    }

    // Metode abstrak yang harus diimplementasikan oleh kelas turunan
    abstract public function bersuara();

    // Metode biasa yang bisa digunakan oleh semua kelas turunan
    public function informasiHewan()
    {
        echo "Nama: " . $this->nama . ", Jenis: " . $this->jenis . "\n";
    }
}

class Kucing extends Hewan
{
    public function bersuara()
    {
        return "Meow";
    }
}

class Anjing extends Hewan
{
    public function bersuara()
    {
        return "Woof";
    }
}

// Membuat objek kucing dan anjing
$kucingku = new Kucing("Mimi", "Persia");
$anjinku = new Anjing("Rex", "Husky");

// Memanggil metode bersuara() dan informasiHewan()
echo $kucingku->bersuara() . "\n";
$kucingku->informasiHewan();

echo $anjinku->bersuara() . "\n";
$anjinku->informasiHewan();