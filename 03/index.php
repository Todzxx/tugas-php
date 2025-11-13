<?php
// File ini akan berisi penjelasan tentang perbedaan fungsi echo(), print(), dan printf() pada PHP.

echo "<h1>Perbedaan echo(), print(), dan printf()</h1>";

// --- echo() ---
echo "<h2>Contoh echo()</h2>";
$text1 = "Belajar PHP";
$text2 = "di W3Schools";
$x = 5;
$y = 4;

// echo dapat menampilkan banyak string, dipisahkan koma
echo $text1, " ", $text2, "<br>";
echo "Jumlah x + y = ", $x + $y;
echo "<hr>";

// --- print() ---
print "<h2>Contoh print()</h2>";
// print hanya bisa menampilkan satu string
print "Halo Dunia!<br>";
print "Totalnya adalah " . ($x + $y);

// print memiliki nilai kembalian (selalu 1)
$nilai_kembalian = print "<br>Ini dicetak dengan print.";
echo "<br>Nilai kembalian print adalah: " . $nilai_kembalian;
echo "<hr>";


// --- printf() ---
printf("<h2>Contoh printf()</h2>");
$angka = 10;
$string = "kucing";

// %d untuk desimal (integer)
printf("Ada %d ekor %s di halaman.<br>", $angka, $string);

// %f untuk float/double
$harga = 15.5;
printf("Harganya adalah %.2f rupiah.<br>", $harga); // .2f untuk 2 angka di belakang koma

// %s untuk string
$nama = "Budi";
printf("Nama saya %s.", $nama);
echo "<hr>";

?>