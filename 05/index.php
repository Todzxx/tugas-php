<?php
// File ini akan berisi penjelasan tentang Konstanta pada PHP.

echo "<h1>Apa itu Konstanta?</h1>";

// Konstanta adalah identifier (nama) untuk sebuah nilai sederhana.
// Nilai tersebut tidak dapat diubah selama eksekusi skrip.
// Secara default, nama konstanta bersifat case-sensitive.
// Berdasarkan konvensi, nama konstanta selalu ditulis dalam huruf besar.

// Mendefinisikan konstanta menggunakan fungsi define()
define("SALAM", "Halo, selamat datang!");
echo SALAM; // Menampilkan nilai konstanta
echo "<hr>";

// Mendefinisikan konstanta menggunakan keyword const
// const hanya bisa digunakan di top-level scope atau di dalam class.
// const tidak bisa digunakan di dalam blok kondisional (if, else).
const PI = 3.14;
echo PI;
echo "<hr>";

// Aturan Penamaan dan Case-Sensitivity
// Nama konstanta mengikuti aturan yang sama seperti variabel PHP (tidak boleh diawali angka).
// Secara default, konstanta bersifat case-sensitive.
define("NAMA", "Budi");
echo NAMA; // OK
// echo nama; // Error: Notice: Use of undefined constant nama

// Parameter ketiga di define() untuk membuat konstanta case-insensitive sudah usang (deprecated) di PHP 7.3 dan dihapus di PHP 8.0.
// Penggunaannya akan menyebabkan error pada versi PHP modern.
// define("STATUS", "Aktif", true);
// echo status; // Baris ini akan menyebabkan error.
echo "<hr>";

// Konstanta Bersifat Global
// Konstanta dapat diakses dari mana saja dalam skrip tanpa memperhatikan scope.
define("DB_HOST", "localhost");

function testScope() {
    echo "Mengakses konstanta dari dalam fungsi: " . DB_HOST;
}

testScope();
echo "<hr>";

// Magic Constants
// PHP memiliki sejumlah konstanta bawaan yang nilainya berubah tergantung di mana mereka digunakan.
echo "<h2>Magic Constants</h2>";
echo "Baris ini ada di baris ke: " . __LINE__ . "<br>";
echo "File ini berada di: " . __FILE__ . "<br>";
echo "Direktori file ini adalah: " . __DIR__ . "<br>";

function namaFungsi() {
    echo "Nama fungsi ini adalah: " . __FUNCTION__ . "<br>";
}
namaFungsi();

class Coba {
    public function getClassName() {
        echo "Nama class ini adalah: " . __CLASS__ . "<br>";
        echo "Nama method ini adalah: " . __METHOD__ . "<br>";
    }
}
$obj = new Coba();
$obj->getClassName();

trait ContohTrait {
    public function getTraitName() {
        echo "Nama trait ini adalah: " . __TRAIT__ . "<br>";
    }
}
class KelasDenganTrait {
    use ContohTrait;
}
$obj2 = new KelasDenganTrait();
$obj2->getTraitName();
// __NAMESPACE__ akan menampilkan namespace saat ini.
?>
