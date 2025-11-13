<?php
// File ini akan berisi penjelasan tentang 5 Hal Dasar yang Harus diketahui tentang Variabel dan Tipe Data pada PHP.

echo "<h1>5 Hal Dasar tentang Variabel dan Tipe Data di PHP</h1>";

// 1. Deklarasi Variabel
echo "<h2>1. Deklarasi Variabel</h2>";
$nama = "Budi"; // Variabel diawali dengan tanda dolar ($)
$umur = 25;
$tinggi_badan = 175.5; // Contoh float
$menikah = false; // Contoh boolean

echo "<p>Nama: " . $nama . " (Tipe: " . gettype($nama) . ")</p>";
echo "<p>Umur: " . $umur . " (Tipe: " . gettype($umur) . ")</p>";
echo "<p>Tinggi Badan: " . $tinggi_badan . " (Tipe: " . gettype($tinggi_badan) . ")</p>";
echo "<p>Status Menikah: " . ($menikah ? "Ya" : "Tidak") . " (Tipe: " . gettype($menikah) . ")</p>";
echo "<hr>";

// 2. Penamaan Variabel
echo "<h2>2. Penamaan Variabel</h2>";
// Aturan:
// - Diawali dengan tanda dolar ($)
// - Karakter pertama setelah $ harus huruf atau underscore, tidak boleh angka.
// - Dapat berisi huruf (a-z, A-Z), angka (0-9), dan underscore (_).
// - Case-sensitive ($nama berbeda dengan $Nama).
// - Tidak boleh mengandung spasi.
// - Hindari menggunakan nama variabel yang sama dengan keyword PHP.

$nama_depan = "Ani";
$namaBelakang = "Wijaya"; // CamelCase
$_alamat = "Jl. Merdeka"; // Diawali underscore
// $1tahun = "Error"; // Akan menyebabkan error sintaks
// $nama lengkap = "Error"; // Akan menyebabkan error sintaks

echo "<p>Nama Lengkap: " . $nama_depan . " " . $namaBelakang . "</p>";
echo "<p>Alamat: " . $_alamat . "</p>";
echo "<hr>";

// 3. Tipe Data
echo "<h2>3. Tipe Data</h2>";
// PHP mendukung beberapa tipe data:
// - String: Urutan karakter.
$string_var = "Ini adalah contoh string.";
echo "<p>String: " . $string_var . "</p>";

// - Integer: Bilangan bulat.
$int_var = 123;
echo "<p>Integer: " . $int_var . "</p>";

// - Float (atau Double): Bilangan desimal.
$float_var = 12.34;
echo "<p>Float: " . $float_var . "</p>";

// - Boolean: True atau False.
$bool_true = true;
$bool_false = false;
echo "<p>Boolean True: " . ($bool_true ? "Benar" : "Salah") . "</p>";
echo "<p>Boolean False: " . ($bool_false ? "Benar" : "Salah") . "</p>";

// - Array: Menyimpan banyak nilai dalam satu variabel.
$array_var = array("apel", "jeruk", "mangga");
echo "<p>Array: " . $array_var[0] . ", " . $array_var[1] . ", " . $array_var[2] . "</p>";

// - Object: Instance dari sebuah class.
class Mobil {
    public $merk;
    function __construct($merk) {
        $this->merk = $merk;
    }
}
$mobil_saya = new Mobil("Toyota");
echo "<p>Object: " . $mobil_saya->merk . "</p>";

// - NULL: Variabel tanpa nilai.
$null_var = null;
echo "<p>NULL: " . var_export($null_var, true) . "</p>";

// - Resource: Variabel khusus yang menyimpan referensi ke sumber daya eksternal (misalnya koneksi database).
// Contoh: $db_koneksi = mysqli_connect(...);
echo "<p>Resource: (Biasanya untuk koneksi database atau file)</p>";
echo "<hr>";

// 4. PHP adalah Loosely Typed
echo "<h2>4. PHP adalah Loosely Typed</h2>";
// Artinya, kita tidak perlu mendeklarasikan tipe data variabel secara eksplisit.
// Tipe data akan ditentukan secara otomatis oleh PHP berdasarkan nilai yang diberikan.
$data = 100; // Integer
echo "<p>Nilai awal: " . $data . " (Tipe: " . gettype($data) . ")</p>";
$data = "Seratus"; // Sekarang menjadi String
echo "<p>Nilai setelah diubah: " . $data . " (Tipe: " . gettype($data) . ")</p>";
$data = 10.5; // Sekarang menjadi Float
echo "<p>Nilai setelah diubah lagi: " . $data . " (Tipe: " . gettype($data) . ")</p>";
echo "<hr>";

// 5. Menggunakan var_dump() dan gettype() untuk melihat Tipe Data
echo "<h2>5. Menggunakan var_dump() dan gettype()</h2>";
// var_dump() menampilkan informasi terstruktur tentang satu atau lebih ekspresi, termasuk tipe dan nilai.
// gettype() mengembalikan tipe dari variabel.

$contoh_string = "Halo";
$contoh_integer = 123;
$contoh_float = 3.14;
$contoh_boolean = true;
$contoh_array = array("a", "b", "c");
$contoh_null = null;

echo "<p>var_dump(\$contoh_string): "; var_dump($contoh_string); echo "</p>";
echo "<p>gettype(\$contoh_string): " . gettype($contoh_string) . "</p>";

echo "<p>var_dump(\$contoh_integer): "; var_dump($contoh_integer); echo "</p>";
echo "<p>gettype(\$contoh_integer): " . gettype($contoh_integer) . "</p>";

echo "<p>var_dump(\$contoh_float): "; var_dump($contoh_float); echo "</p>";
echo "<p>gettype(\$contoh_float): " . gettype($contoh_float) . "</p>";

echo "<p>var_dump(\$contoh_boolean): "; var_dump($contoh_boolean); echo "</p>";
echo "<p>gettype(\$contoh_boolean): " . gettype($contoh_boolean) . "</p>";

echo "<p>var_dump(\$contoh_array): "; var_dump($contoh_array); echo "</p>";
echo "<p>gettype(\$contoh_array): " . gettype($contoh_array) . "</p>";

echo "<p>var_dump(\$contoh_null): "; var_dump($contoh_null); echo "</p>";
echo "<p>gettype(\$contoh_null): " . gettype($contoh_null) . "</p>";
echo "<hr>";

?>