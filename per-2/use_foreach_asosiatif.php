<?php 
// $mahasiswa = [
//     ["Palguna", "12345", "Teknik Informatika", "akutaktau1@gmail.com"],
//     ["Wahyu", "12346", "Teknik Informatika", "akutaktau2@gmail.com"],
//     ["Atmin Sigma", "12347", "Teknik Informatika", "akutaktau3@gmail.com"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Palguna",
        "nim" => "12345",
        "jurusan" => "Teknik Informatika",
        "email" => "akutaktau1@gmail.com",
        "gambar" => "1.jpg"
    ],
    [
        "nama" => "Wahyu",
        "nim" => "12346",
        "jurusan" => "Teknik Informatika",
        "email" => "akutaktau2@gmail.com",
        "gambar" => "2.jpg"
    ],
    [
        "nama" => "Atmin Sigma",
        "nim" => "12347",
        "jurusan" => "Teknik Informatika",
        "email" => "akutaktau3@gmail.com",
        "gambar" => "3.jpg"
    ]
];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

	<?php foreach( $mahasiswa as $mhs ) : ?>
		<ul>
			<li>
				<img width="300" src="img/<?= $mhs["gambar"]; ?>">
			</li>
			<li>Nama : <?= $mhs["nama"]; ?></li>
			<li>NIM : <?= $mhs["nim"]; ?></li>
			<li>Jurusan : <?= $mhs["jurusan"]; ?></li>
			<li>Email : <?= $mhs["email"]; ?></li>
		</ul>
	<?php endforeach; ?>




</body>
</html>