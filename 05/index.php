<?php
// File ini akan berisi penjelasan tentang Konstanta pada PHP.

echo "<h1>Apa itu Konstanta?</h1>";

// Konstanta adalah identifier (nama) untuk sebuah nilai sederhana.
// Nilai tersebut tidak dapat diubah selama eksekusi skrip.
// Secara default, nama konstanta bersifat case-sensitive.
// Berdasarkan konvensi, nama konstanta selalu ditulis dalam huruf besar.

// Mendefinisikan konstanta menggunakan fungsi define()
define("SALAM", "Halo, selamat datang!");
echo SALAM; // Menampilkan nilai konstanta
echo "<hr>";

// Mendefinisikan konstanta menggunakan keyword const
// const hanya bisa digunakan di top-level scope atau di dalam class.
// const tidak bisa digunakan di dalam blok kondisional (if, else).
const PI = 3.14;
echo PI;
?>