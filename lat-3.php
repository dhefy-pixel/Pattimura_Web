<?php
$siswa = "Fereno";
$matkul = "PHP";
$nilai = 80;
$ket = ($nilai>=60) ? "Lulus" : "Tidak Lulus";
//Jika Nilai >=85 dan <=100 grade A
//Jika Nilai >=75 dan <=85 grade B
//Jika Nilai >=65 dan <=75 grade C
//Jika Nilai >=55 dan <=65 grade D
if ($nilai >=85 && $nilai <=100){
    $grade = "A";
}
else if ($nilai >=75 && $nilai <=84){
    $grade = "A";
}
else $grade = "D";
//Jika Grade A maka Predikat Sangat Memuaskan
//Jika Grade B maka Predikat Baik
//Jika Grade C maka Predikat Cukup
//Jika Grade D maka Predikat Buruk
switch($grade){
    case "A":
        $predikat = "Sangat Memuaskan";
        break;
    case "B":
        $predikat = "Baik";
        break;
    case "C":
        $predikat = "Cukup";
        break;
    case "D":
        $predikat = "Buruk"; 
        break;   
}
echo $siswa. '<br>';
echo $matkul. '<br>';
echo $nilai. '<br>';
echo $ket.  '<br>';
echo $grade. '<br>';
echo $predikat. '<br>';
?>