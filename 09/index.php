<?php
// File ini akan berisi penjelasan tentang 7 Hal yang Harus Kamu Ketahui Tentang Array di PHP.

echo "<h1>7 Hal yang Harus Kamu Ketahui Tentang Array di PHP</h1>";

// Array adalah variabel khusus yang dapat menampung lebih dari satu nilai pada satu waktu.

// 1. Apa itu Array dan Cara Membuat Array Terindeks
echo "<h2>1. Apa itu Array dan Cara Membuat Array Terindeks</h2>";
// Array terindeks adalah array dengan indeks numerik (dimulai dari 0).

// Cara 1: Menggunakan fungsi array()
$mobil = array("Volvo", "BMW", "Toyota");
echo "Saya suka mobil " . $mobil[0] . ", " . $mobil[1] . ", dan " . $mobil[2] . ".<br>";

// Cara 2: Menggunakan kurung siku [] (lebih modern, sejak PHP 5.4)
$motor = ["Honda", "Yamaha", "Suzuki"];
echo "Saya juga suka motor " . $motor[0] . ".<br>";

// Menampilkan seluruh isi array untuk debugging
echo "<pre>";
print_r($mobil);
echo "</pre>";
echo "<hr>";

// 2. Array Asosiatif
echo "<h2>2. Array Asosiatif</h2>";
// Array asosiatif adalah array yang menggunakan nama kunci (key) yang Anda tentukan sendiri.

$umur = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
// atau
$nilai = [
    "Budi" => 80,
    "Ani" => 90,
    "Candra" => 75
];

echo "Umur Peter adalah " . $umur['Peter'] . " tahun.<br>";
echo "Nilai Budi adalah " . $nilai['Budi'] . ".<br>";

echo "<pre>";
print_r($nilai);
echo "</pre>";
echo "<hr>";

// 3. Array Multidimensi
echo "<h2>3. Array Multidimensi</h2>";
// Array yang berisi satu atau lebih array di dalamnya.

$mahasiswa = [
    [
        "nama" => "Budi",
        "jurusan" => "Teknik Informatika",
        "nilai" => [80, 85, 90]
    ],
    [
        "nama" => "Ani",
        "jurusan" => "Sistem Informasi",
        "nilai" => [88, 92, 95]
    ]
];

// Mengakses nilai dalam array multidimensi
echo "Nama mahasiswa pertama: " . $mahasiswa[0]["nama"] . "<br>";
echo "Jurusan mahasiswa kedua: " . $mahasiswa[1]["jurusan"] . "<br>";
echo "Nilai pertama mahasiswa pertama: " . $mahasiswa[0]["nilai"][0] . "<br>";

echo "<pre>";
print_r($mahasiswa);
echo "</pre>";
?>
