<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Terbilang</title>
</head>
<body>
    <h2>Konversi Terbilang</h2>
    <form method="post">
        <label for="angkaInput">Masukkan angka (1-9): </label>
        <input type="text" name="angkaInput" id="angkaInput">
        <input type="submit" value="Konversi">
    </form>

    <?php
    function konversiTerbilang($angka) {
        $terbilang = ["", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan"];
        return $terbilang[$angka];
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $angkaInput = $_POST["angkaInput"];

        if (!is_numeric($angkaInput) || $angkaInput < 1 || $angkaInput > 9) {
            echo "Input tidak valid. Harap masukkan angka antara 1 dan 9.";
        } else {
            // Konversi angka ke huruf
            $terbilang = konversiTerbilang($angkaInput);

            // Tampilkan hasil konversi
            echo $angkaInput . " dikonversi menjadi " . $terbilang;
        }
    }
    ?>
</body>
</html>
