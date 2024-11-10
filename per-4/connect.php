<?php

//inisialisasi koneksi
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "ngobar"; //sesuaikan dengan nama database kalian

$db_table = 'users';

//membuat koneksi
$conn = mysqli_connect($host, $user, $pass, $db_name);

// if ($conn) {
//     echo "Koneksi sukses gilakkk";
// }
