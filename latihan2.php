<?php
$txt = "Selamat datang!";
$txt2 = "Politeknik Negeri Madiun";
$x = 5;
$y = 10.5;

    echo "<p>Isi Variable txt adalah: $txt</p>";
    echo "<p>Isi Variable x adalah: $x</p>";
    echo "<p>Isi Variable y adalah: $y</p>";
    echo "Belajar PHP di " . $txt2 . "<br>";
    echo "Hasil perkalian x dan y: " . ($x * $y);

// Konstanta PHP
define("nama_konstanta", "Nailah Adyan");
echo "<br>" . nama_konstanta;
?>