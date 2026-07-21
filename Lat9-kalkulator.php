<?php
$a = isset($_GET['a']) ? $_GET['a'] : "";
$b = isset($_GET['b']) ? $_GET['b'] : "";
$hasil = "";

if (isset($_GET['proses'])) {
    if ($_GET['proses'] == "tambah") {
        $hasil = $a + $b;
    } elseif ($_GET['proses'] == "kurang") {
        $hasil = $a - $b;
    } elseif ($_GET['proses'] == "bagi") {
        if ($b != 0) {
            $hasil = $a / $b;
        } else {
            $hasil = "Tidak bisa dibagi 0";
        }
    } elseif ($_GET['proses'] == "kali") {
        $hasil = $a * $b;
    }
} // <-- Penutup if

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
</head>
<body>

<form action="" method="get">
    Angka 1:
    <input type="text" name="a" value="<?= $a ?>">

    Angka 2:
    <input type="text" name="b" value="<?= $b ?>">

    Hasil:
    <input type="text" value="<?= $hasil ?>" readonly><br><br>

    <hr>

    <button type="submit" name="proses" value="tambah">+</button>
    <button type="submit" name="proses" value="kurang">-</button>
    <button type="submit" name="proses" value="bagi">/</button>
    <button type="submit" name="proses" value="kali">*</button>
    <input type="reset" value="Clear">
</form>

</body>
</html>