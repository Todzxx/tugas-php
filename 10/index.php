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
cetakGaris();

// 4. Scope Variabel dalam Fungsi
echo "<h2>4. Scope Variabel dalam Fungsi</h2>";
// Scope variabel menentukan di mana variabel dapat diakses.

$variabel_global = "Saya adalah variabel global."; // Variabel global

function contohScope() {
    $variabel_lokal = "Saya adalah variabel lokal."; // Variabel lokal
    echo $variabel_lokal . "<br>";
    // echo $variabel_global; // Ini akan menghasilkan error jika tidak menggunakan 'global'
}

contohScope();
echo $variabel_global . "<br>";
// echo $variabel_lokal; // Ini akan menghasilkan error karena variabel_lokal tidak dikenal di luar fungsi

// Menggunakan kata kunci global
$x = 5;
$y = 10;

function tambahGlobal() {
    global $x, $y; // Mengakses variabel global
    $y = $x + $y; // Mengubah nilai variabel global y
}

tambahGlobal();
echo "Nilai y setelah fungsi: " . $y . "<br>"; // Output: 15
cetakGaris();

// 5. Praktik Terbaik dan Perbedaan Konsep Prosedur dan Fungsi
echo "<h2>5. Praktik Terbaik dan Perbedaan Konsep</h2>";
echo "<p>Meskipun PHP tidak membedakan secara sintaksis, secara konseptual:</p>";
echo "<ul>";
echo "<li><b>Fungsi (Function):</b> Sebaiknya dirancang untuk mengembalikan suatu nilai. Fokus pada 'apa' yang dihitung atau dihasilkan.</li>";
echo "<li><b>Prosedur (Procedure):</b> Sebaiknya dirancang untuk melakukan suatu aksi atau efek samping (misalnya mencetak ke layar, menyimpan ke database) dan tidak perlu mengembalikan nilai. Fokus pada 'bagaimana' suatu aksi dilakukan.</li>";
echo "</ul>";
echo "<p><b>Praktik Terbaik:</b></p>";
echo "<ul>";
echo "<li>Berikan nama fungsi yang deskriptif.</li>";
echo "<li>Fungsi harus melakukan satu tugas saja (Single Responsibility Principle).</li>";
echo "<li>Gunakan parameter untuk input dan nilai kembalian untuk output.</li>";
echo "<li>Hindari penggunaan variabel global di dalam fungsi jika memungkinkan, lebih baik gunakan parameter atau kembalian.</li>";
echo "</ul>";
?>