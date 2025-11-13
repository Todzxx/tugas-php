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
echo "<hr>";

// 4. Nilai Parameter Default & Variable-length Argument Lists
echo "<h2>4. Nilai Parameter Default & Variable-length Argument Lists</h2>";

// Nilai Parameter Default
// Kita bisa memberikan nilai default pada parameter. Jika parameter tidak diberikan saat pemanggilan,
// nilai default akan digunakan. Parameter dengan nilai default harus diletakkan di akhir.
function sapaDenganWaktu($nama = "Pengunjung", $waktu = "pagi") {
    echo "Halo, " . $nama . " selamat " . $waktu . "!<br>";
}

sapaDenganWaktu("Andi", "siang"); // Menggunakan nilai yang diberikan
sapaDenganWaktu("Siti"); // Menggunakan nilai default untuk waktu
sapaDenganWaktu(); // Menggunakan nilai default untuk nama dan waktu

// Variable-length Argument Lists (sejak PHP 5.6)
// Menggunakan operator ... (splat operator) untuk menerima argumen dalam jumlah tak terbatas.
function jumlahkanSemua(...$angka) {
    $total = 0;
    foreach ($angka as $num) {
        $total += $num;
    }
    return $total;
}

echo "Jumlah dari 1, 2, 3 adalah: " . jumlahkanSemua(1, 2, 3) . "<br>";
echo "Jumlah dari 10, 20, 30, 40 adalah: " . jumlahkanSemua(10, 20, 30, 40) . "<br>";
echo "<hr>";

// 5. Fungsi Anonim (Closures) & Arrow Functions (PHP 7.4+)
echo "<h2>5. Fungsi Anonim (Closures) & Arrow Functions</h2>";

// Fungsi Anonim (Anonymous Functions / Closures)
// Fungsi tanpa nama yang dapat disimpan dalam variabel dan diteruskan sebagai argumen.
$salamAnonim = function($nama) {
    echo "Halo anonim, " . $nama . "!<br>";
};
$salamAnonim("Dunia");

// Contoh penggunaan fungsi anonim dengan use
$pengali = 2;
$kalikan = function($angka) use ($pengali) {
    return $angka * $pengali;
};
echo "Hasil perkalian dengan fungsi anonim: " . $kalikan(5) . "<br>"; // Output: 10

// Arrow Functions (sejak PHP 7.4)
// Bentuk singkat dari fungsi anonim, cocok untuk fungsi satu baris.
// fn(arguments) => expression;
$tambahSatu = fn($num) => $num + 1;
echo "Hasil tambah satu dengan arrow function: " . $tambahSatu(10) . "<br>"; // Output: 11

$filterAngka = array_filter([1, 2, 3, 4, 5], fn($num) => $num % 2 == 0);
echo "Angka genap dari array: <pre>";
print_r($filterAngka);
echo "</pre>";
?>
