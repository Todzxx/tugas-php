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
?>
