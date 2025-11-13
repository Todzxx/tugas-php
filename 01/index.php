<?php
// ====================================
// 🐘 DASAR PHP
// ====================================

// 1. OUTPUT DASAR
echo "<h2>1. Output Dasar</h2>";
echo "Halo Dunia!<br><br>";

// 2. VARIABEL & TIPE DATA
echo "<h2>2. Variabel & Tipe Data</h2>";
$nama = "Yayan";
$umur = 17;
$tinggi = 170.5;

echo "Nama: $nama <br>";
echo "Umur: $umur tahun <br>";
echo "Tinggi: $tinggi cm <br><br>";

// 3. OPERATOR
echo "<h2>3. Operator</h2>";
$a = 10;
$b = 5;
echo "Penjumlahan: " . ($a + $b) . "<br>";
echo "Perkalian: " . ($a * $b) . "<br>";
echo "Perbandingan (a > b): " . ($a > $b ? 'Benar' : 'Salah') . "<br><br>";

// 4. PERCABANGAN (IF - ELSE)
echo "<h2>4. Percabangan (if / else)</h2>";
$nilai = 85;

if ($nilai >= 90) {
    echo "Nilai A<br>";
} elseif ($nilai >= 75) {
    echo "Nilai B<br>";
} else {
    echo "Nilai C<br>";
}
echo "<br>";

// 5. PERULANGAN (FOR)
echo "<h2>5. Perulangan (for)</h2>";
for ($i = 1; $i <= 5; $i++) {
    echo "Angka ke-$i <br>";
}
echo "<br>";

// 6. ARRAY & FOREACH
echo "<h2>6. Array & Foreach</h2>";
$hobi = ["Ngoding", "Gaming", "Makan"];
foreach ($hobi as $h) {
    echo "- $h <br>";
}
echo "<br>";

// 7. FUNGSI
echo "<h2>7. Fungsi</h2>";
function salam($nama) {
    return "Halo, $nama!";
}
echo salam($nama) . "<br><br>";

// 8. FORM (simulasi sederhana)
echo "<h2>8. Form (Simulasi Input)</h2>";
?>
<form method="POST">
    Masukkan Nama: <input type="text" name="namaInput">
    <input type="submit" value="Kirim">
</form>

<?php
if (isset($_POST['namaInput'])) {
    $input = $_POST['namaInput'];
    echo "Halo, $input!<br><br>";
}

// 9. INCLUDE (contoh sederhana)
echo "<h2>9. Include (contoh simulasi)</h2>";
echo "Biasanya digunakan untuk memanggil file lain, contoh: header.php, footer.php<br><br>";

// 10. PENUTUP
echo "<h2>10. Selesai ✅</h2>";
echo "Terima kasih telah belajar dasar PHP dengan Petani Kode & Yayan!";
?>
