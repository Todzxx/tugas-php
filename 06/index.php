<?php
// File ini akan berisi penjelasan tentang 7 Jenis Operator dalam PHP.

echo "<h1>7 Jenis Operator dalam PHP</h1>";

// 1. Operator Aritmatika
echo "<h2>1. Operator Aritmatika</h2>";
$a = 10;
$b = 3;

echo "a = " . $a . ", b = " . $b . "<br>";
echo "Penjumlahan (a + b): " . ($a + $b) . "<br>"; // 13
echo "Pengurangan (a - b): " . ($a - $b) . "<br>"; // 7
echo "Perkalian (a * b): " . ($a * $b) . "<br>"; // 30
echo "Pembagian (a / b): " . ($a / $b) . "<br>"; // 3.333...
echo "Modulus (a % b): " . ($a % $b) . "<br>"; // 1 (sisa bagi)
echo "Eksponensial (a ** b): " . ($a ** $b) . "<br>"; // 1000 (10 pangkat 3)
echo "<hr>";

// 2. Operator Penugasan
echo "<h2>2. Operator Penugasan</h2>";
$x = 10;
echo "Nilai awal x = " . $x . "<br>";

$x += 5; // Sama dengan $x = $x + 5;
echo "x setelah += 5: " . $x . "<br>"; // 15

$x -= 3; // Sama dengan $x = $x - 3;
echo "x setelah -= 3: " . $x . "<br>"; // 12

$x *= 2; // Sama dengan $x = $x * 2;
echo "x setelah *= 2: " . $x . "<br>"; // 24

$x /= 4; // Sama dengan $x = $x / 4;
echo "x setelah /= 4: " . $x . "<br>"; // 6

$x %= 5; // Sama dengan $x = $x % 5;
echo "x setelah %= 5: " . $x . "<br>"; // 1

$y = "Hello";
$y .= " World!"; // Sama dengan $y = $y . " World!";
echo "y setelah .= ' World!': " . $y . "<br>"; // "Hello World!"
echo "<hr>";

// 3. Operator Perbandingan
echo "<h2>3. Operator Perbandingan</h2>";
$p = 10;
$q = "10";
$r = 20;

echo "p = " . $p . ", q = \"" . $q . "\", r = " . $r . "<br>";

echo "p == q (sama nilai): " . var_export($p == $q, true) . "<br>"; // true
echo "p === q (sama nilai dan tipe): " . var_export($p === $q, true) . "<br>"; // false
echo "p != r (tidak sama nilai): " . var_export($p != $r, true) . "<br>"; // true
echo "p <> r (tidak sama nilai): " . var_export($p <> $r, true) . "<br>"; // true
echo "p !== q (tidak sama nilai atau tipe): " . var_export($p !== $q, true) . "<br>"; // true
echo "p < r (lebih kecil): " . var_export($p < $r, true) . "<br>"; // true
echo "p > r (lebih besar): " . var_export($p > $r, true) . "<br>"; // false
echo "p <= q (lebih kecil atau sama dengan): " . var_export($p <= $q, true) . "<br>"; // true
echo "p >= q (lebih besar atau sama dengan): " . var_export($p >= $q, true) . "<br>"; // true

// Operator Spaceship (PHP 7+)
$s = 10;
$t = 20;
$u = 10;
echo "Spaceship (s <=> t): " . ($s <=> $t) . "<br>"; // -1 (s lebih kecil dari t)
echo "Spaceship (t <=> s): " . ($t <=> $s) . "<br>"; // 1 (t lebih besar dari s)
echo "Spaceship (s <=> u): " . ($s <=> $u) . "<br>"; // 0 (s sama dengan u)
echo "<hr>";

// 4. Operator Increment/Decrement
echo "<h2>4. Operator Increment/Decrement</h2>";
$i = 5;
echo "Nilai awal i = " . $i . "<br>";

echo "Pre-increment (++i): " . (++$i) . ", sekarang i = " . $i . "<br>"; // 6, i=6
$j = 5;
echo "Post-increment (j++): " . ($j++) . ", sekarang j = " . $j . "<br>"; // 5, j=6

$k = 5;
echo "Pre-decrement (--k): " . (--$k) . ", sekarang k = " . $k . "<br>"; // 4, k=4
$l = 5;
echo "Post-decrement (l--): " . ($l--) . ", sekarang l = " . $l . "<br>"; // 5, l=4
?>
