<?php
// File ini akan berisi penjelasan tentang Percabangan untuk Logika Program di PHP.

echo "<h1>Memahami Percabangan untuk Logika Program</h1>";

// Percabangan adalah cara untuk mengontrol alur program berdasarkan kondisi tertentu.
// Jika kondisi terpenuhi (true), maka blok kode tertentu akan dieksekusi.

// 1. Statement if
echo "<h2>1. Statement if</h2>";
// Statement if digunakan untuk mengeksekusi blok kode jika kondisi bernilai true.

$nilai = 80;
echo "Nilai Anda: " . $nilai . "<br>";

if ($nilai > 70) {
    echo "Selamat, Anda lulus!";
}
echo "<hr>";

// 2. Statement if-else
echo "<h2>2. Statement if-else</h2>";
// Statement if-else digunakan untuk mengeksekusi satu blok kode jika kondisi true,
// dan blok kode lain jika kondisi false.

$umur = 17;
echo "Umur Anda: " . $umur . " tahun.<br>";

if ($umur >= 18) {
    echo "Anda sudah dewasa.";
} else {
    echo "Anda masih di bawah umur.";
}
?>