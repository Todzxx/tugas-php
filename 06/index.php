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
?>