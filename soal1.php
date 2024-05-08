<?php
// Gaji pokok Obi
$gajiPokok = 3250000;

// Tunjangan jabatan Obi
$tunjangan = 1200000;

// Hitung gaji kotor (gaji pokok + tunjangan)
$gajiKotor = $gajiPokok + $tunjangan;

// Hitung pajak penghasilan (10% dari gaji kotor)
$pajak = 0.1 * $gajiKotor;

// Hitung gaji bersih (gaji kotor - pajak)
$gajiBersih = $gajiKotor - $pajak;

// Tampilkan hasil
echo "Gaji bersih yang diterima Obi setiap bulannya adalah: Rp. " . number_format($gajiBersih, 0, ',', '.') . ",-";
?>
