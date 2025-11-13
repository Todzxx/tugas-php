<?php
// File ini akan berisi penjelasan tentang Prosedur dan Fungsi dalam PHP.

echo "<h1>Memahami Prosedur dan Fungsi dalam PHP</h1>";

// Dalam PHP, tidak ada perbedaan sintaksis yang ketat antara prosedur dan fungsi.
// Keduanya didefinisikan menggunakan kata kunci 'function'.
// Perbedaannya lebih pada konsep:
// - Prosedur: Blok kode yang melakukan serangkaian tugas tanpa mengembalikan nilai eksplisit.
// - Fungsi: Blok kode yang melakukan tugas dan mengembalikan nilai.

// 1. Pengenalan Fungsi (sebagai Prosedur)
echo "<h2>1. Pengenalan Fungsi (sebagai Prosedur)</h2>";
// Fungsi yang hanya melakukan aksi (side effect) tanpa mengembalikan nilai.

function tampilkanSalam() {
    echo "Halo, selamat pagi!<br>";
}

function cetakGaris() {
    echo "<hr>";
}

tampilkanSalam(); // Memanggil prosedur
cetakGaris();
?>