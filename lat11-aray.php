<?php
//array : Kumpulan Data
// "foreach" utk mncetak array
// 1. Array Numerik
$ar_buah = ['Pepaya', 'Durian', 'Salak', 'Anggur', 'Jeruk'];
//cetak - dimulai dari 0
echo $ar_buah[0];
echo '<br>';
echo $ar_buah[1]; 
echo '<br>';
echo $ar_buah[2];
echo '<br>' ;
echo $ar_buah[3];
echo '<br>'; 
echo $ar_buah[4];
echo '<hr>'; 
$jumlah = count($ar_buah);
echo $jumlah;
echo '<hr>';
//mencetak semua data
foreach ($ar_buah as $cetak){
    echo "$cetak <br>";
}
echo '<hr>';

// 2. Array Asosiatif
$ar_hewan =[5=>'ayam','sapi','kambing'];
//cetak mulai dari no 5 ke atas
echo $ar_hewan[7];
echo '<hr>';
foreach ($ar_hewan as $cetak){
    echo "$cetak <br>";
}
echo '<hr>';
//cetak semua dengan nomor atau isinya
foreach ($ar_hewan as $id =>$isi){
    echo "$id $isi <br>";
}
echo '<hr>';
// 3. Array Multidimensi (Arary dalam Array)
?>
bulan:
<select name="bln" >
<option value ="">bulan</option>
<?php
$bln = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
$a1=['Nama'=>'Budi', 'Alamat'=>'Depok', 'Telp'=>'12345', 'Status'=>'Jomblo'];
$a2=['Nama'=>'Dono', 'Alamat'=>'Bogor', 'Telp'=>'23456', 'Status'=>'Kawin'];
$a3=['Nama'=>'Tini', 'Alamat'=>'Jakarta', 'Telp'=>'54321', 'Status'=>'Lajang'];
$ar_siswa = [$a1,$a2,$a3];
foreach($bln as $id => $isi){
    echo "<option value ='$id'>$isi</option>";
}
?>
<?php
$ar_judul=['No','Nama','Alamat', 'Telp', 'Status'];
?>
<h3>Daftar Tabel Siswa</h3>
<table border="1" width="50%" cellpadding="2" cellspacing="0" >
<thead>
<tr>
<?php
foreach($ar_judul as $judul){
?>
<th bgcolor="yellow"><?=$judul?></th>
<?php
}?>
</tr>
</thead>
<tbody>
<?php
$no=1; //looping nomor
foreach($ar_siswa as $siswa){
?>
<tr>
<td><?= $no?></td>
<td><?= $siswa['Nama'] ?></td>
<td><?= $siswa['Alamat'] ?></td>
<td><?= $siswa['Telp'] ?></td>
<td><?= $siswa['Status'] ?></td>
</tr>
<?php
$no++; //looping nomor
}
?>
</tbody>
<tfoot>
<tr>
<th bgcolor="yellow" colspan="5">
copyright @pusinfolahta
</th>
</tr>
</tfoot>
</table>
<?php
$nilai=['wilar'=>90, 'edi'=>80, 'pras'=>70, 'tio'=>50];
$ar_judul=['No','Nama','Nilai','Keterangan'];
//fungsi agregat di array
$total = array_sum($nilai); //total nilai
$min = min($nilai); //nilai terendah
$max = max($nilai); //nilai tertinggi
$jml = count($nilai); //banyak data
$rata = $total / $jml; //rata2
$keterangan=[
'total nilai'=>$total,
'terendah'=>$min,
'tertinggi'=>$max,
'rata-rata'=>$rata,
'banyak peserta'=>$jml
];
?>
<!-- sintak html -->
<table align="center" border="1" width="50%" cellpadding="2" cellspacing="0">
<thead>
<tr>
<?php
foreach ($ar_judul as $judul){
echo "<td> $judul </td>";
}
?>
</tr>
</thead>
<tbody>
<?php
$no=1; //looping nomor
foreach($nilai as $nama => $nl){
//jika >=60 Lulus, Selain itu Gagal
$ket=($nl >=60) ? 'Lulus' : 'Gagal';
?>
<tr>
<td><?= $no?></td>
<td><?= $nama ?></td>
<td><?= $nl ?></td>
<td><?= $ket ?></td>
</tr>
<?php
$no++; //looping nomor
}
?>
</tbody>
<tfoot>
<!-- isi agregat -->
<?php
foreach($keterangan as $ktr => $hasil){
?>
<tr>
<th colspan="3"><?= $ktr ?></th>
<th><?= $hasil ?></th>
</tr>
<?php
}
?>
</tfoot>
</table>
</select>
