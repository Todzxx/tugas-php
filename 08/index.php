<?php
// File ini akan berisi penjelasan tentang 4 Jenis Perulangan dalam Pemrograman PHP.

echo "<h1>Memahami 4 Jenis Perulangan dalam Pemrograman PHP</h1>";

// Perulangan (looping) digunakan untuk mengeksekusi blok kode berulang kali
// selama kondisi tertentu terpenuhi.

// 1. Perulangan while
echo "<h2>1. Perulangan while</h2>";
// Perulangan while akan mengeksekusi blok kode selama kondisi yang ditentukan bernilai true.
// Kondisi diperiksa sebelum setiap iterasi.

$i = 1;
while ($i <= 5) {
    echo "Angka: " . $i . "<br>";
    $i++;
}
echo "<hr>";

// 2. Perulangan do-while
echo "<h2>2. Perulangan do-while</h2>";
// Perulangan do-while akan mengeksekusi blok kode setidaknya satu kali,
// kemudian akan mengulang selama kondisi yang ditentukan bernilai true.
// Kondisi diperiksa setelah setiap iterasi.

$j = 1;
do {
    echo "Angka: " . $j . "<br>";
    $j++;
} while ($j <= 5);
echo "<hr>";

// 3. Perulangan for
echo "<h2>3. Perulangan for</h2>";
// Perulangan for digunakan ketika kita tahu berapa kali kita ingin mengulang blok kode.
// Memiliki tiga bagian: inisialisasi, kondisi, dan increment/decrement.

for ($k = 1; $k <= 5; $k++) {
    echo "Angka: " . $k . "<br>";
}
echo "<hr>";

// 4. Perulangan foreach
echo "<h2>4. Perulangan foreach</h2>";
// Perulangan foreach digunakan untuk mengulang elemen-elemen dalam array atau objek.

$warna = array("merah", "hijau", "biru");
echo "Daftar Warna:<br>";
foreach ($warna as $nilai_warna) {
    echo "- " . $nilai_warna . "<br>";
}

$umur = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
echo "Daftar Umur:<br>";
foreach ($umur as $nama => $nilai_umur) {
    echo "- " . $nama . " berumur " . $nilai_umur . " tahun.<br>";
}
?>