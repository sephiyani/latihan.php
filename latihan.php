<?php
$uang = 50000;
$makanan = 25000;
$minuman = 10000;
$total = $makanan+$minuman;
$sisa = $uang -($makanan+$minuman);

echo "Uang hari = Rp. $uang <br>";
echo "makan = Rp. $makanan <br>";
echo "minum = Rp. $minuman <br>";
echo "Hri menghabiskan uang sebanyak = Rp. $total <br>";
echo "Sisa uang hari = Rp. $sisa<br>";

if ($sisa==0) {
    echo "Hari <b>BOROS</b>";
} else {
    echo "Hari <b>HEMAT</b>";
}

?>
