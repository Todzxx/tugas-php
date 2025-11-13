<?php
// File ini akan berisi penjelasan tentang Percabangan untuk Logika Program di PHP.

echo "<h1>Memahami Percabangan untuk Logika Program</h1>";

// Percabangan adalah cara untuk mengontrol alur program berdasarkan kondisi tertentu.
// Jika kondisi terpenuhi (true), maka blok kode tertentu akan dieksekusi.

// 1. Statement if
echo "<h2>1. Statement if</h2>";
// Statement if digunakan untuk mengeksekusi blok kode jika kondisi bernilai true.

$nilai = 80;
echo "Nilai Anda: " . $nilai . "<br>";

if ($nilai > 70) {
    echo "Selamat, Anda lulus!";
}
echo "<hr>";

// 2. Statement if-else
echo "<h2>2. Statement if-else</h2>";
// Statement if-else digunakan untuk mengeksekusi satu blok kode jika kondisi true,
// dan blok kode lain jika kondisi false.

$umur = 17;
echo "Umur Anda: " . $umur . " tahun.<br>";

if ($umur >= 18) {
    echo "Anda sudah dewasa.";
} else {
    echo "Anda masih di bawah umur.";
}
echo "<hr>";

// 3. Statement if-elseif-else
echo "<h2>3. Statement if-elseif-else</h2>";
// Digunakan untuk mengecek beberapa kondisi secara berurutan.

$nilai_ujian = 75;
echo "Nilai ujian Anda: " . $nilai_ujian . "<br>";

if ($nilai_ujian >= 85) {
    echo "Predikat: A";
} elseif ($nilai_ujian >= 75) {
    echo "Predikat: B";
} elseif ($nilai_ujian >= 60) {
    echo "Predikat: C";
} else {
    echo "Predikat: D";
}
echo "<hr>";

// 4. Operator Ternary
echo "<h2>4. Operator Ternary</h2>";
// Bentuk singkat dari statement if-else.
// (kondisi) ? (nilai jika true) : (nilai jika false);

$jenis_kelamin = "Pria";
$sapaan = ($jenis_kelamin == "Pria") ? "Bapak" : "Ibu";

echo "Sapaan: " . $sapaan;
echo "<hr>";

// 5. Statement switch
echo "<h2>5. Statement switch</h2>";
// Alternatif untuk if-elseif-else yang membandingkan satu variabel dengan banyak nilai.

$hari = "Selasa";
echo "Hari ini hari: " . $hari . "<br>";

switch ($hari) {
    case "Senin":
        echo "Hari ini adalah hari kerja.";
        break;
    case "Selasa":
        echo "Hari ini adalah hari kerja.";
        break;
    case "Rabu":
        echo "Hari ini adalah hari kerja.";
        break;
    case "Kamis":
        echo "Hari ini adalah hari kerja.";
        break;
    case "Jumat":
        echo "Hari ini adalah hari kerja, besok libur!";
        break;
    case "Sabtu":
        echo "Hari ini adalah hari libur.";
        break;
    case "Minggu":
        echo "Hari ini adalah hari libur.";
        break;
    default:
        echo "Nama hari tidak valid.";
}
?>
