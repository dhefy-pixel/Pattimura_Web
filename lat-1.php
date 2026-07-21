<?php
//komentar pertama
#komnetae ke-duda
/*
komentar ke-tiga
satu
dua
tiga
*/

echo "Belajar PHP <br>";
echo 'Belajar WEB <br>';
print "Belajar PHP <br>";
print 'Belajar WEB <br>';
echo "<hr>";

// variabel
$nama1 = "budi utomo";
$kata = "Halo";
$kata2 = "Semangat";
echo "$kata" ." $nama1" . " $kata2". ' belajarnya';
echo "<hr>";

$nama2 = "Ferano";
$umur = 30;
$Kerja = "Tentara";
$Alamat = "Depok";
$berat = 74.5;
//cara 1
echo "Pak ".$nama2." Bekerja Sebagai ".$Kerja. " Beliau Tinggal DI ".$Alamat. ", Umurnya ".$umur. " Tahun Dengan Berat Badan ".$berat. "Kg <br>";
//cara 2
echo "Pak $nama2 Bekerja Sebagai $Kerja Beliau Tinggal DI $Alamat, Umurnya $umur Tahun Dengan Berat Badan $berat Kg";
echo "<hr>";
//variabel sistem
echo $_SERVER['SERVER_ADMIN'];
echo $_SERVER['SERVER_PORT'];
echo $_SERVER['DOCUMENT_ROOT'];
echo "<hr>";
//varibel konstanta
define('PHI',3.14);
define('PELAJARAN','LARAVEL');
define('DBSERVER','localhost');
echo 'Matpel:' .PELAJARAN. '<br>';
echo 'Web:' .DBSERVER. '<br>';
echo 'Nilai:' .PHI. '<br><br>';
//type data
$itungsrting = "Belajar";
var_dump($itungsrting);
echo "<hr>";

$angka = 12177;
$angka2 = 12.177;
var_dump($angka);
var_dump($angka2);

echo "<hr>";
$srt = "Ko KenAL FerNiKA KO";//teks asli
echo "$srt";
echo "<hr>";
//ubah huruf menajadi KAPITAL
$besar = strtoupper($srt);
$kecil = strtolower($srt);
echo $besar;
echo "<br>";
echo $kecil;
echo "<hr>";
echo "<h2>Operator Aritmaitka</h2>";
$a=10;
$b=10;
echo $a+$b. '<br>';
echo $a-$b. '<br>';
echo $a*$b. '<br>';
echo $a/$b. '<br>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br><hr>
    <h2>Sisipkan PHP ke HTML</h2>
    <!-- cara ke 1 -->
     <?php echo "isi PHP  cara k-1 di HTML <br>"; ?>
    <!-- cara ke-2 -->
     <?= "isi PHP cara k-2 di HTML"; ?>
    <br><hr size = "5px" color = "black">
</body>
</html>