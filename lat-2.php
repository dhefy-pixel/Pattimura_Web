<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOM PHP</title>
</head>
<body>
<form action="" method="get">
    Masukan Umur Anda :
    <input type = "number" name="umur">
    <input type = "submit" name="proses" value="proses">

</form>
<?php
//Fungsi IF
//Jika umur >= 50 Tahun, Maka anda dapat KTP Lansia
//Jika umur >= 40 Tahun, <=49 Tahun Maka anda dapat KTP Pra Lansia
//Jika umur >= 30 Tahun, <=39 Tahun Maka anda dapat KTP Dewasa
//Jika umur >= 20 Tahun, <=29 Tahun Maka anda dapat KTP Remaja
//Jika umur >= 05 Tahun, <=19 Tahun Maka anda dapat KTP Anak
// $umur = 18; //data yang di input
if (isset($_GET['proses'])){
    
    $umur=$_GET['umur'];
    if($umur >=50){
        echo ("Anda Dapat KTP Lansia");
    }
    else if($umur >=40 && $umur <=49){
        echo("Anda Dapat KTP PRA Lansia");
    }
    else if($umur >=30 && $umur <=39){
        echo("Anda Dapat KTP DEWASA");
    }
    else if($umur >=20 && $umur <=29){
        echo("Anda Dapat KTP REMAJA");
    }
    else if($umur >=05 && $umur <=19){
        echo("Anda Dapat KTP ANAK");
    }


    else{
        echo("Tidak Dapat KTP");
    }
}
?>
<hr>
</body>

<?php
//Switchcase
$baju='M';
$baju=strtolower($baju);
switch($baju){
    case "l":
    echo "Large";
    break;
    case "m":
    echo "Medium";
    break;
    case "s":
    echo "small";
    break;
    default;
    echo "Ukuran Tak Tersedia";
    break;
}
echo "<hr>";

$nilai=80;
switch($nilai){
    case $nilai <=70:
        echo "$nilai: Nilai Cukup";
        break;
    case $nilai <=50:
        echo "$nilai: Nilai Kurang";
        break;
    case $nilai <=100:
        echo "$nilai: Nilai Memuaskan";
        break;
    default:
        echo "Nihil";
        break;
}
echo "<hr>";
$nl=1;
if ($nl>5){
    echo "Baik";
}
else {
    echo "Buruk";
}

echo "<hr>"
?>
