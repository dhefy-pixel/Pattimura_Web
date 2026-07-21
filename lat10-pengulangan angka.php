<?php
for($x=10;$x>=0;$x=$x-1){
    echo '<br>'.$x;
}
echo "<hr>";
for($x=0;$x<=10;$x=$x+1){
    echo '<br>'.$x;
}
echo "<hr>";
?>
<select name="tgl">
    <option value ="">Tanggal</option>
    <?php
    for($tgl=1;$tgl<=31;$tgl++){
        echo "<option value=$tgl>$tgl</option>";
    }

