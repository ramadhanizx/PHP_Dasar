<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kelas</title>
</head>
<body style="background-color: lightCyan;">

<?php
// Data kelas dengan array 2 dimensi
$array = array(
    "1C" => array("udin", "ismail", "adi"),
    "1D" => array("lukman", "fajri", "mahmud")
);

// Menampilkan data array
echo "<pre>";
print_r($array);
echo "</pre>";

// Menampilkan kelas 1C
echo "<pre>";
print_r($array['1C']);
echo "</pre>";

// Menampilkan kelas 1D dengan index 0
echo $array['1D'][0];

// Menampilkan fajri
echo " " . $array['1D'][1];

// Menampilkan adi
echo " " . $array['1C'][2];

// Data kelas bisa ditulis juga dengan
$array_simple = [
    "1C" => ["uddin", "ismail", "adi"],
    "1D" => ["lukman", "fajri", "mahmud"]
];
?>

</body>
</html>
