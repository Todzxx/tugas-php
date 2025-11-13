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
echo "<hr>";

// 4. Melakukan Perulangan pada Array
echo "<h2>4. Melakukan Perulangan pada Array</h2>";

// Menggunakan foreach (paling umum)
echo "<h3>Menggunakan foreach</h3>";
$warna = ["merah", "hijau", "biru"];
foreach ($warna as $w) {
    echo $w . "<br>";
}

// Menggunakan foreach dengan key dan value
echo "<h3>Menggunakan foreach dengan key dan value</h3>";
$data_user = ["nama" => "John Doe", "email" => "john@example.com"];
foreach ($data_user as $key => $value) {
    echo ucfirst($key) . ": " . $value . "<br>";
}

// Menggunakan for (untuk array terindeks)
echo "<h3>Menggunakan for</h3>";
$buah = ["Apel", "Jeruk", "Mangga"];
for ($i = 0; $i < count($buah); $i++) {
    echo $buah[$i] . "<br>";
}
echo "<hr>";

// 5, 6, 7. Fungsi-Fungsi Array yang Berguna
echo "<h2>5, 6, 7. Fungsi-Fungsi Array yang Berguna</h2>";

// Menghitung jumlah elemen: count()
echo "<h3>Menghitung Elemen: count()</h3>";
echo "Jumlah buah: " . count($buah) . "<br>";

// Menambah elemen ke akhir array: array_push()
echo "<h3>Menambah Elemen: array_push()</h3>";
array_push($buah, "Leci", "Nanas");
echo "Buah setelah ditambah: <pre>";
print_r($buah);
echo "</pre>";

// Mengurutkan array: sort(), rsort(), asort(), ksort()
echo "<h3>Mengurutkan Array: sort()</h3>";
sort($buah); // Mengurutkan berdasarkan nilai (ascending)
echo "Buah setelah diurutkan: <pre>";
print_r($buah);
echo "</pre>";

// Menggabungkan array: array_merge()
echo "<h3>Menggabungkan Array: array_merge()</h3>";
$sayuran = ["Bayam", "Kangkung"];
$makanan = array_merge($buah, $sayuran);
echo "Gabungan buah dan sayur: <pre>";
print_r($makanan);
echo "</pre>";

// Dan masih banyak lagi fungsi lainnya seperti array_pop, array_shift, array_key_exists, in_array, dll.
?>
