<?php
// File ini akan berisi penjelasan tentang Fungsi dalam PHP.

echo "<h1>Memahami Fungsi dalam PHP</h1>";

// Fungsi adalah blok kode yang dapat digunakan berulang kali.
// Fungsi akan dieksekusi hanya ketika dipanggil.

// 1. Apa itu Fungsi dan Cara Mendefinisikan Fungsi Sederhana
echo "<h2>1. Apa itu Fungsi dan Cara Mendefinisikan Fungsi Sederhana</h2>";

// Mendefinisikan fungsi tanpa parameter
function sapaPengunjung() {
    echo "Halo, selamat datang di website kami!<br>";
}

// Memanggil fungsi
sapaPengunjung();
sapaPengunjung(); // Bisa dipanggil berkali-kali

function tampilkanPesan() {
    echo "Ini adalah pesan dari fungsi.<br>";
}
tampilkanPesan();
echo "<hr>";

// 2. Parameter Fungsi
echo "<h2>2. Parameter Fungsi</h2>";
// Parameter adalah variabel yang digunakan untuk menerima input saat fungsi dipanggil.

// Fungsi dengan satu parameter
function sapaNama($nama) {
    echo "Halo, " . $nama . "! Selamat datang.<br>";
}

sapaNama("Budi");
sapaNama("Ani");

// Fungsi dengan beberapa parameter
function hitungJumlah($angka1, $angka2) {
    $jumlah = $angka1 + $angka2;
    echo "Jumlah dari " . $angka1 . " + " . $angka2 . " adalah " . $jumlah . "<br>";
}

hitungJumlah(10, 5);
hitungJumlah(20, 15);
?>