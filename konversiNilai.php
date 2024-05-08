<?php

function konversi($nilai) {
  if ($nilai < 60) {
    $huruf = 'C';
  } elseif ($nilai < 70) {
    $huruf = 'BC';
  } elseif ($nilai < 80) {
    $huruf = 'B';
  } elseif ($nilai < 90) {
    $huruf = 'AB';
  } else {
    $huruf = 'A';
  }

  return $huruf;
}

if (isset($_GET['nilai'])) {
  $nilai = $_GET['nilai'];
  $huruf = konversi($nilai);
  echo "Nilai angka: $nilai<br>";
  echo "Huruf nilai: $huruf";
} else {
  echo "Masukkan nilai angka untuk dikonversi";
}

?>
