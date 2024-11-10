<?php

include "connect.php";

//jika ada parameter id pada url(kita sebut metode GET)
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    //mengambil data dari url dan menyimpannya ke variabel id
    $id = $_GET['id'];

    //prepare query
    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);

    //eksekusi query dan mengecek apakah berhasil atau tidak
    if ($stmt->execute()) {
        echo "berhasil menghapus data";
        return header("Location: read.php");
    } else {
        echo "terjadi kesalahan dalam menghapus data";
        return header("Location: read.php");
    }

    // $stmt->close();
    // $conn->close();
}
