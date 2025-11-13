<?php
// File ini berisi penjelasan tentang sintaks dasar PHP.

// Tag PHP
// Kode PHP diawali dengan <?php dan diakhiri dengan ?>

// Komentar di PHP
// Ini adalah komentar satu baris
# Ini juga komentar satu baris
/*
Ini adalah blok komentar
yang bisa terdiri dari
beberapa baris.
*/

// PHP Case Sensitivity
// Perintah, fungsi, dan class bawaan PHP tidak case-sensitive.
echo "Hello World!<br>";
ECHO "Hello World!<br>";
EcHo "Hello World!<br>";

// Namun, semua nama variabel adalah case-sensitive.
$warna = "merah";
echo "Mobilku berwarna " . $warna . "<br>";
// Baris berikut akan menghasilkan error karena variabel $WARNA tidak didefinisikan.
// echo "Kapalku berwarna " . $WARNA . "<br>";
?>
<!DOCTYPE html>
<html>
<body>

<h1>Halaman PHP Pertamaku</h1>

<?php
// Menampilkan output ke browser
echo "Belajar Sintaks Dasar PHP!";
?>

</body>
</html>