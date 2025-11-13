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
echo "<hr>";

// 3. Nilai Kembalian (Return Values)
echo "<h2>3. Nilai Kembalian (Return Values)</h2>";
// Fungsi dapat mengembalikan nilai menggunakan statement return.

function tambah($bil1, $bil2) {
    $hasil = $bil1 + $bil2;
    return $hasil; // Mengembalikan nilai hasil penjumlahan
}

$total = tambah(7, 3);
echo "Hasil penjumlahan 7 + 3 adalah: " . $total . "<br>"; // Output: 10

echo "Hasil penjumlahan 100 + 200 adalah: " . tambah(100, 200) . "<br>"; // Output: 300

// Fungsi dengan tipe data kembalian (PHP 7+)
function kali(int $num1, int $num2): int {
    return $num1 * $num2;
}
echo "Hasil perkalian 4 * 5 adalah: " . kali(4, 5) . "<br>";
?>
