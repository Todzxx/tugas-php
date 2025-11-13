<?php
// File ini akan berisi penjelasan tentang 5 Hal Dasar yang Harus diketahui tentang Variabel dan Tipe Data pada PHP.

echo "<h1>5 Hal Dasar tentang Variabel dan Tipe Data di PHP</h1>";

// 1. Deklarasi Variabel
echo "<h2>1. Deklarasi Variabel</h2>";
$nama = "Budi"; // Variabel diawali dengan tanda dolar ($)
$umur = 25;
echo "<p>Nama: " . $nama . ", Umur: " . $umur . "</p>";

// 2. Penamaan Variabel
echo "<h2>2. Penamaan Variabel</h2>";
// Aturan: diawali $, tidak boleh angka, hanya huruf, angka, dan underscore. Case-sensitive.
$nama_depan = "Ani";
// $1nama = "Error"; // Ini akan error
echo "<p>Nama Depan: " . $nama_depan . "</p>";

// 3. Tipe Data
echo "<h2>3. Tipe Data</h2>";
$string_var = "Ini adalah string"; // String
$int_var = 123; // Integer
$float_var = 12.34; // Float
$bool_var = true; // Boolean
$array_var = array("apel", "jeruk"); // Array
$null_var = null; // NULL
echo "<p>String: " . $string_var . ", Integer: " . $int_var . ", Float: " . $float_var . "</p>";

// 4. PHP adalah Loosely Typed
echo "<h2>4. PHP adalah Loosely Typed</h2>";
$nilai = 100; // Integer
echo "<p>Nilai awal: " . $nilai . "</p>";
$nilai = "Seratus"; // Sekarang menjadi String
echo "<p>Nilai setelah diubah: " . $nilai . "</p>";

// 5. Menggunakan var_dump() untuk melihat Tipe Data
echo "<h2>5. Menggunakan var_dump()</h2>";
var_dump($nama);
echo "<br>";
var_dump($umur);
echo "<br>";
var_dump($array_var);
?>
