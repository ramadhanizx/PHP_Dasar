<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Perulangan</title>
</head>
<body>

    <div style="text-align: center;">
        <h1>Latihan Perulangan</h1>
        <p>Menampilkan pola gambar bintang</p>
    </div>

    <hr>

    <div style="text-align: center;">
        <?php
            for ($i = 1; $i <= 6; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    echo "*";
                }
                echo "<br>";
            }

            for ($i = 5; $i >= 1; $i--) {
                for ($j = 1; $j <= $i; $j++) {
                    echo "*";
                }
                echo "<br>";
            }
        ?>
    </div>

</body>
</html>
