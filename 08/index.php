<?php
// File ini akan berisi penjelasan tentang 4 Jenis Perulangan dalam Pemrograman PHP.

echo "<h1>Memahami 4 Jenis Perulangan dalam Pemrograman PHP</h1>";

// Perulangan (looping) digunakan untuk mengeksekusi blok kode berulang kali
// selama kondisi tertentu terpenuhi.

// 1. Perulangan while
echo "<h2>1. Perulangan while</h2>";
// Perulangan while akan mengeksekusi blok kode selama kondisi yang ditentukan bernilai true.
// Kondisi diperiksa sebelum setiap iterasi.

$i = 1;
while ($i <= 5) {
    echo "Angka: " . $i . "<br>";
    $i++;
}
?>
