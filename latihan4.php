<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4</title>
    <link rel="icon" type="img/png" href="#" sizes="16x16" />
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307049">
    <meta name="author" content="Fandhi Syahru Rishaleh">
</head>
<body>
    <?php
    /* Operator logika yang bisa digunakan:
    * == sama dengan $x == $y
    * === identical $x ===$y
    * != tidak sama dengan $x != $y
    * <> tidak sama dengan $X <> $y
    * !== not identical $x !== $y
    * > lebih besar dari $x > $y
    * < kurang dari $x < $y
    * >= lebih besar atau sama dengan $x >= $y
    * <= kurang dari atau sama dengan $x <= $y
    * <=> spaceship $x <=> $y
    */

    $t = date("H"); //mendapatkan jam dengan format 1-24
    echo "if";
    if ($t < 16) {
        echo "Selamat siang!";
    }

    $t = date("H"); //mendapatkan jam dengan format 1-24
    echo "<br> If dan Else <br>";
    if ($t < 20) {
        echo "Selamat siang!";
    } else {
        echo "Selamat malam!";
    }

    echo "<br> Nested If <br>";
    if ($t < 20) {
        echo "Selamat pagi!";
    } elseif ($t < 16) {
        echo "Selamat sore!";
    } else {
        echo "Selamat Malam!";
    }

    ?>
</body>
</html>