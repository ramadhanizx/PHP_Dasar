<?php
$withdrawn = 1387500;
$denominations = [100000, 50000, 20000, 10000, 5000, 2000, 500];
$counts = [];

echo "soal 1:<br>";
foreach ($denominations as $denomination) {
    $counts[$denomination] = intval($withdrawn / $denomination);
    $withdrawn = $withdrawn % $denomination;
}

foreach ($counts as $denomination => $count) {
    echo "Rp. " . $denomination . ": " . $count . " pieces<br>";
}

echo "<br>";

$students = [
    ["No" => 1, "Poin" => 75, "Siswa" => "Adi"],
    ["No" => 2, "Poin" => 80, "Siswa" => "Joni"],
    ["No" => 3, "Poin" => 65, "Siswa" => "Jihan"],
    ["No" => 4, "Poin" => 70, "Siswa" => "Aya"],
    ["No" => 5, "Poin" => 85, "Siswa" => "Ita"],
    ["No" => 6, "Poin" => 90, "Siswa" => "Budi"],
    ["No" => 7, "Poin" => 95, "Siswa" => "Sari"],
    ["No" => 8, "Poin" => 65, "Siswa" => "Tini"],
];

echo "soal 2:<br>";
echo "a) Points of student number 5: " . $students[4]["Poin"] . "<br>";

echo "b) Students with 90 points: ";
foreach ($students as $student) {
    if ($student["Poin"] == 90) {
        echo $student["Siswa"] . " ";
    }
}
echo "<br>";

$studentsWith100Points = array_filter($students, function ($student) {
    return $student["Poin"] == 100;
});

echo "c) Students with 100 points: ";
if (empty($studentsWith100Points)) {
    echo "There aren't any.";
} else {
    foreach ($studentsWith100Points as $student) {
        echo $student["Siswa"] . " ";
    }
}
echo "<br>";
?>