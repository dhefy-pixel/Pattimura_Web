<?php
//LOOPING FOR
//PENGULANGAN ANGKA 1 s/d 10
for ($x=1;$x<=10;$x++){ //$x++ = $x=$x+1. $x=$x+2
echo '<br>'.$x;
}
echo "<hr>";
for ($x=1;$x<=10;$x++){ //$x++ = $x=$x+1. $x=$x+2
echo '<br>'.$x;
}
echo "<hr>";
//PENGULANGAN ANGKA 10 s/d 1
//SILAHKAN DI JAWAB!!!

echo "<hr>";
//looping dengan while:
// while: perulangan untuk pengecekan di awal, sehingga jika kondisi tidak
// terpenuhi, maka perulangan tidak bisa di jalankan
//PENGULANGAN ANGKA 1 s/d 30
$a=1; //start
while ($a<=10) //ending
{
echo "<br> $a"; //cetak
$a++; //berapa kali loncatan
}
echo "<hr>";
$a=1; //start
while ($a>=10) //ending
{
echo "<br> $a"; //cetak
$a++; //berapa kali loncatan
}
//PENGULANGAN ANGKA 30 s/d 1
//SILAHKAN DI JAWAB!!!

echo "<hr>";
for ($c=0;$c<=10;$c++){
echo "Saya sedang belajar PHP di Pusinfolahta <br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Daftar Siswa</title>
</head>
<body>
<table align="center" border="1" width="400" cellspacing="1"
cellpadding="10">
<thead>
<tr bgcolor="orange">
<th>No</th>
<th>Nama</th>
<th>Alamat</th>
</tr>
</thead>
<tbody>
<?php
for($no=1;$no<=50;$no=$no+1){ //looping dengan for dari 1 s/d 100
//tentukan warna genap/ganjil dengan konsep ternary pada looping
//jika nomor modulus(%) 2 tidak ada sisa 0
//cara ternary
$warna = ($no % 2 == 0) ? 'yellow' : 'magenta';
echo "<tr bgcolor='$warna'>
<td>$no</td>
<td> Peserta $no</td>
<td> JL. Cilangkap Raya No.$no</td>
</tr>";

}
?>
</tbody>
</table>
</body>
</html>