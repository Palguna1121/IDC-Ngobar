<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipe Data</title>
</head>
<body>
    <h1>Belajar Tipe Data</h1>

    <?php
    echo "<br><h2>1. Tipe Data Integer </h2>";
    // inisiasi dan inisialisasi variabel
    $a = 10;
    $b = 5;
    $c = $a + 5;
    $d = $b + (10 * 5);
    $e = $d - $c;

    // Tampilkan data dengan perintah echo
    echo "Variabel a: $a <br>";
    echo "Variabel b: {$b} <br>";
    echo "Variabel c: {$c} <br>";
    echo "Variabel d: {$d} <br>";
    echo "Variabel e: {$e} <br>";

    // mengetahui tipe data dari variabel
    var_dump($e);
    ?>

    <?php
    echo "<br><h2>2. Tipe Data Float </h2>";
    $nilaiMatematika = 5.1;
    $nilaiKimia = 6.7;
    $nilaiBahasaIndonesia = 9.3;

    // hitung nilai rata-rata
    $rataRata = ($nilaiMatematika + $nilaiKimia + $nilaiBahasaIndonesia) / 3;

    // Tampilkan data
    echo "Matematika: {$nilaiMatematika} <br>";
    echo "Kimia: {$nilaiKimia} <br>";
    echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
    echo "Rata-rata: {$rataRata} <br>";

    // lihat tipe data dari variabel $rataRata
    var_dump($rataRata);
    ?>

    <?php
    echo "<br><h2>3. Tipe Data Boolean </h2>";
    $apakahSiswaLulus = true;
    $apakahSiswaSudahUjian = false;

    var_dump($apakahSiswaLulus);
    echo "<br>";
    var_dump($apakahSiswaSudahUjian);
    ?>

    <?php
    echo "<br><h2>4. Tipe Data String </h2>";
    $namaDepan = "Atmin"; // pakai tanda petik dua
    $namaBelakang = 'Mewing'; // pakai tanda petik satu

    // menggabungkan dua variabel dengan tanda
    // petik dua
    $namaLengkap = "{$namaDepan} {$namaBelakang}";

    // kita juga bisa menggabungkan string dengan menggunakan tanda titik (.)
    $namaLengkap2 = $namaDepan . ' ' . $namaBelakang;

    // [Tampilkan Data]
    // kita bisa memasukkan variabel lain jika menggunakan tanda petik dua
    echo "Nama Depan: {$namaDepan} <br>"; 
    // ada pun jika pakai tanda petik satu, kita tidak bisa memasukkan variabel 
    // di dalam string akan tetapi menggabungkannya dengan operator titik (.)
    echo 'Nama Belakang: ' . $namaBelakang . '<br>';

    echo $namaLengkap;
    echo "<br>";
    echo $namaLengkap2;
    ?>

    <?php
    echo "<br><h2>5. Tipe Data Array </h2>";
    
    $array_itu_kotak = [];
    // var_dump($array_itu_kotak);

    echo "<br>";

    $listMahasiswa = ["Palguna", "Wahyu", "Atmin Sigma"];
    echo "indeks ke 0 " . $listMahasiswa[0];
    echo "<br>";
    echo "indeks ke 1 " . $listMahasiswa[1];
    echo "<br>";
    var_dump($listMahasiswa[2]);
    echo "<br>";
    var_dump($listMahasiswa);
    ?>
</body>
</html>