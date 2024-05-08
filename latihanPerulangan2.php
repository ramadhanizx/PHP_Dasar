<?php
// Definisi array angka
$angka = array(12, 13, 15, 16, 67, 189, 346, 876, 54232, 3256);

// Perulangan untuk setiap elemen dalam array
foreach ($angka as $nilai) {
    // Periksa apakah nilai ganjil atau genap
    if ($nilai % 2 == 0) {
        $status = "Genap";
    } else {
        $status = "Ganjil";
    }

    // Tampilkan nilai dan status
    echo "<p>Nomor: $nilai $status</p>";
}
?>
