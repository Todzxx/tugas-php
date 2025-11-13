<?php
// Ini adalah komentar satu baris

/*
Ini adalah
komentar multi-baris
*/

// Variabel untuk menyimpan data
$salam = "Halo, Dunia!";
$angka1 = 10;
$angka2 = 5;

// Menampilkan output
echo $salam;
echo "<br>"; // Tag HTML untuk baris baru

// Operator Aritmatika
echo "Penjumlahan: " . ($angka1 + $angka2) . "<br>";
echo "Pengurangan: " . ($angka1 - $angka2) . "<br>";
echo "Perkalian: " . ($angka1 * $angka2) . "<br>";
echo "Pembagian: " . ($angka1 / $angka2) . "<br>";

// Struktur Kontrol: Percabangan
if ($angka1 > $angka2) {
    echo "Angka 1 lebih besar dari Angka 2";
} else {
    echo "Angka 1 tidak lebih besar dari Angka 2";
}
?>