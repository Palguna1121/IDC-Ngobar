<?php

// Jenis-Jenis metode perulangan pada PHP
// perulangan for
// perulangan while
// perulangan do-while
// perulangan foreach
// purulangan rekursif

//perulangan for
for ($i = 0; $i < 5; $i++) {
    echo $i;
}
// Penjelasan: Perulangan for membutuhkan 3 buah ekspresi yang mana ekspresi tersebut masing-masing dipisahkan oleh tanda titik koma (;).
// ekspresi pertama digunakan untuk menginisialisasi variabel
// ekspresi kedua digunakan untuk boolean statement, yang mana perulangan akan terus dilakukan selama statemen ini bernilai true
// ekspresi ketiga adalah suatu aksi yang akan selalu dijalankan setiap kali satu perulangan telah selesai dilakukan.
echo "<br>";
//contoh lain for
$listMahasiswa = ["Palguna", "Wahyu", "Atmin Sigma"];
for ($i = 0; $i < count($listMahasiswa); $i++) {
    echo "Nama: {$listMahasiswa[$i]} <br>";
}


echo "<br>";




//perulangan while
$i = 0; 
while ($i < 5) {
    echo $i;
    $i++;
}
// Perulangan while hanya menerima satu ekspresi saja: yaitu ekspresi boolean. 
// Di mana perintah yang ada di dalam blok kode while, akan senantiasa dilakukan
// secara berulang-ulang selama ekspresi boolean tersebut bernilai true.

// Perulangan tanpa batas dengan while
// while (true) {
//     echo "Jangan lakukan ini, atau PC anda akan macet!! <br>";
// }

echo "<br>";



//perulangan do-while
$i = 0;
do {
    echo $i;
    $i++;
} while ($i < 5);
// Perulangan do-while mirip dengan perulangan while,akan mengeksekusi perulangan terlebih dahulu, 
//baru setelah itu ia akan mengevaluasi kondisi dalam while.


echo "<br>";


//perulangan foreach
$namaMahasiswa = ["Palguna", "Wahyu", "Atmin Sigma"];
// Jenis perulangan selanjutnya adalah menggunakan foreach. Jenis perulangan ini khusus untuk tipe data array baik array asosiatif mau pun array terindeks.
// Kita bisa melakukan perulangan pada setiap elemen array tanpa harus tahu berapa panjang dari array itu sendiri.
// Sintaksnya ada dua versi, kita bisa menggunakan yang mana saja sesuai dengan kebutuhan
//foreach singkat
foreach ($namaMahasiswa as $nama) {
    echo "Nama mahasiswa: {$nama} <br>";
}
echo "<br>";
//foreach lengkap
foreach ($namaMahasiswa as $key => $value) {
    echo "Key: {$key} - Value: {$value} <br>";
}




echo "<br>";

// Perulangan Rekursif
// Jenis perulangan terakhir yang bisa kita gunakan dalam bahasa pemrograman PHP adalah: perulangan rekursif.
// Semua metode perulangan yang telah kita coba di atas adalah metode perulangan iteratif. Sifatnya sama: yaitu melakukan perulangan pertama, kedua, ketiga, dan seterusnya.
// Berbeda dengan perulangan rekursif yang memiliki cara kerja yang sangat berbeda.
// Ia dikatakan rekursif karena perulangannya yang tidak “berhenti”. Ia adalah fungsi yang senantiasa memanggil dirinya sendiri.
// Sebagai ilustrasi, bayangkan kita memiliki 2 buah cermin. Lalu kita letakkan 2 cermin tersebut saling berhadapan.
// Apa yang akan terjadi? Bayangan yang dihasilkan akan saling berpantulan tanpa akhir, bukan?

//contoh:
// function tampilkanHaloDunia () {
//   echo "Halo dunia! <br>";
//   tampilkanHaloDunia();
// }
// panggil fungsi tampilkanHaloDunia();
// tampilkanHaloDunia();

//jangan coba coba nanti pc ngelek(cukup internet aja dulu yg ngeleg, pc nya jangan)