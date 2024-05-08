<?php
$x = 5;
$y = 10;

// Operator Aritmatika
echo "Penambahan ". ($x + $y) . "<br>";
echo "Pengurangan ". ($x - $y) . "<br>";
echo "Perkalian ". ($x * $y) . "<br>";
echo "Pembagian ". ($x / $y) . "<br>";
echo "Modulus ". ($x % $y) . "<br>";
echo "Eksponensial ". ($x ** $y) . "<br>";

// Operator Penugasan
$x *= 2; // Sama dengan x = x * 2
$y /= 2; // Sama dengan y = y / 2

// Operator Increment/Decrement
echo "Isi ++x = ".($x++)."<br>"; // Post-increment
echo "Isi x++ = ".$x."<br>"; 
echo "<br>"; 
echo "Isi --y = ".(--$y)."<br>"; // Pre-decrement
echo "Isi y-- = ".$y."<br>";

// Operator Penugasan Kondisional
$user = 'Andi darman';
$status = (empty($user))? "Kosong" : "Ada isi";

// Variabel $color diisi dengan 'red' jika $color tidak ada atau null dan diisi 'green' jika $color ada isi
$color = $color?? 'red';
?>