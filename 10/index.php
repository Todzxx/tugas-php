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

// 2. Fungsi dengan Nilai Kembalian
echo "<h2>2. Fungsi dengan Nilai Kembalian</h2>";
// Fungsi yang menghitung atau memproses sesuatu dan mengembalikan hasilnya.

function hitungLuasPersegi($sisi) {
    $luas = $sisi * $sisi;
    return $luas; // Mengembalikan nilai luas
}

$sisi_persegi = 5;
$luas_hasil = hitungLuasPersegi($sisi_persegi);
echo "Luas persegi dengan sisi " . $sisi_persegi . " adalah: " . $luas_hasil . "<br>";

function buatPesan($nama) {
    return "Selamat datang, " . $nama . "!";
}

$pesan_selamat = buatPesan("Andi");
echo $pesan_selamat . "<br>";
cetakGaris();

// 3. Parameter (Input ke Fungsi/Prosedur)
echo "<h2>3. Parameter (Input ke Fungsi/Prosedur)</h2>";
// Parameter memungkinkan kita untuk mengirim data ke dalam fungsi atau prosedur.

// Prosedur dengan parameter
function sapaPengguna($nama_pengguna) {
    echo "Halo, " . $nama_pengguna . "! Semoga harimu menyenangkan.<br>";
}
sapaPengguna("Budi");
sapaPengguna("Siti");

// Fungsi dengan beberapa parameter
function hitungTotal($harga, $jumlah) {
    return $harga * $jumlah;
}
$total_belanja = hitungTotal(15000, 3);
echo "Total belanja Anda: Rp " . number_format($total_belanja, 0, ',', '.') . "<br>";
?>