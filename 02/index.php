<?php
// ===============================
// 🐘 SINTAKS DASAR PHP + CSS
// ===============================
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaks Dasar PHP</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f6f8;
            color: #333;
            margin: 0;
            padding: 0;
        }
        header {
            background: #007bff;
            color: white;
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }
        main {
            max-width: 900px;
            background: white;
            margin: 25px auto;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 3px 8px rgba(0,0,0,0.1);
        }
        h2 {
            color: #007bff;
            border-bottom: 2px solid #007bff;
            padding-bottom: 4px;
        }
        .box {
            background: #f9fafb;
            border-left: 4px solid #007bff;
            margin: 15px 0;
            padding: 15px;
            border-radius: 8px;
        }
        code {
            background: #eaeaea;
            padding: 3px 6px;
            border-radius: 4px;
            font-size: 14px;
        }
        .output {
            background: #e9f5ff;
            padding: 10px;
            border-radius: 6px;
            border-left: 4px solid #007bff;
            margin-top: 8px;
        }
        footer {
            text-align: center;
            padding: 15px 0;
            background: #007bff;
            color: white;
            margin-top: 20px;
            border-top: 2px solid #0056b3;
        }
    </style>
</head>
<body>
<header>
    <h1>🐘 Sintaks Dasar PHP</h1>
    <p>Materi belajar dari <a href="https://www.petanikode.com" style="color:white; text-decoration: underline;">Petani Kode</a></p>
</header>

<main>

<?php
// 1. STRUKTUR DASAR PHP
echo "<h2>1. Struktur Dasar PHP</h2>";
echo "<div class='box'>";
echo "Halo Dunia! Ini contoh kode PHP pertama kamu.";
echo "</div>";

// 2. KOMENTAR
echo "<h2>2. Komentar</h2>";
echo "<div class='box'>";
echo "Komentar tidak dijalankan oleh program. Gunakan untuk memberi catatan pada kode.";
echo "</div>";

// 3. OUTPUT (echo & print)
echo "<h2>3. Output (echo & print)</h2>";
echo "<div class='box'>";
echo "Menggunakan echo: Halo Dunia!<br>";
print "Menggunakan print: Selamat Datang di PHP!";
echo "</div>";

// 4. VARIABEL
echo "<h2>4. Variabel</h2>";
$nama = "Yayan";
$umur = 17;
echo "<div class='box'>";
echo "Nama: $nama <br>";
echo "Umur: $umur tahun";
echo "</div>";

// 5. TIPE DATA
echo "<h2>5. Tipe Data</h2>";
$teks = "Halo";
$angka = 20;
$desimal = 3.14;
$benar = true;
$array = ["apel", "jeruk", "mangga"];
echo "<div class='box'>";
echo "String: $teks <br>";
echo "Integer: $angka <br>";
echo "Float: $desimal <br>";
echo "Boolean: " . ($benar ? "true" : "false") . "<br>";
echo "Array: " . implode(", ", $array);
echo "</div>";

// 6. OPERATOR
echo "<h2>6. Operator</h2>";
$a = 10; $b = 5;
echo "<div class='box'>";
echo "Penjumlahan: $a + $b = " . ($a + $b) . "<br>";
echo "Perbandingan (a > b): " . ($a > $b ? "Benar" : "Salah") . "<br>";
echo "Penggabungan String: " . ("Yayan" . " " . "Y") . "<br>";
echo "</div>";

// 7. PERCABANGAN
echo "<h2>7. Percabangan (if / else)</h2>";
$nilai = 82;
echo "<div class='box'>";
if ($nilai >= 90) {
    echo "Nilai A";
} elseif ($nilai >= 75) {
    echo "Nilai B";
} else {
    echo "Nilai C";
}
echo "</div>";

// 8. PERULANGAN
echo "<h2>8. Perulangan (for)</h2>";
echo "<div class='box'>";
for ($i = 1; $i <= 5; $i++) {
    echo "Angka ke-$i <br>";
}
echo "</div>";

// 9. FUNGSI
echo "<h2>9. Fungsi</h2>";
function salam($nama) {
    return "Halo, $nama!";
}
echo "<div class='box'>" . salam("Yayan") . "</div>";

// 10. PHP + HTML
echo "<h2>10. PHP + HTML</h2>";
echo "<div class='box'>";
echo "Contoh PHP yang digabung dengan HTML di satu file.";
echo "</div>";
?>

<div class="output">
    <strong>Contoh:</strong>
    <p>Hari ini adalah <b><?php echo date("l, d F Y"); ?></b></p>
</div>

</main>

<footer>
    &copy; <?php echo date("Y"); ?> Belajar PHP Dasar | Petani Kode & Yayan Y.
</footer>

</body>
</html>
