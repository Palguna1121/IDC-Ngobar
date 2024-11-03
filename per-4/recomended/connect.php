<?php

include "config.php";


//menggunakan mysqli
try {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $conn->set_charset("utf8");
    echo "Koneksi sukses <br>";
    // return $conn;
} catch (Exception $e) {
    echo "Koneksi Gagal: " . $e->getMessage() . "<br> <br>";
    // return "Koneksi Gagal" . $e->getMessage();
}



//menggunakan PDO
try {
    $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Koneksi sukses <br>";
    // return $conn;
} catch (PDOException $e) {
    echo "Koneksi Gagal: " . $e->getMessage() . "<br>";
    // return "Koneksi Gagal" . $e->getMessage();
}
