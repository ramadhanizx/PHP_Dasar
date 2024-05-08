<?php
echo '<body style="background-color: Moccasin;">';

$namaBuah = array("Nanas", "Mangga", "Jeruk", "Apel", "Melon");
echo "Saya suka " . $namaBuah[0] . ", " . $namaBuah[1] . ", dan " . $namaBuah[2] . ". <br>";

// Tampilkan Mangga
echo "Saya suka " . $namaBuah[1] . ". <br>";
// Tampilkan Jeruk
echo "Saya suka " . $namaBuah[2] . ". <br>";
// Tampilkan Apel
echo "Saya suka " . $namaBuah[3] . ". <br>";
// Tampilkan Melon
echo "Saya suka " . $namaBuah[4] . ". <br>";

// Array dengan spesifik index
$umur = array("Andi" => "35 Tahun", "Ben" => "37 Tahun", "Joe" => "39 Tahun");
$umur['Ahmad'] = "50 Tahun";
echo "Umur Andi adalah " . $umur['Andi'] . ". <br>";

// Tampilkan semua umur
foreach ($umur as $nama => $nilai_umur) {
    echo "Umur $nama adalah $nilai_umur. <br>";
}
?>