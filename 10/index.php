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
?>
