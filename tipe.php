<?php
$nim = "02293400";
$nama = 'Sephiyani';
$Umur = 16;
$nilai = 92.25;
$status = true;
echo "NIM : " . $nim . "<br>";
echo "Nama : $nama<br>";
print "Umur : " . $Umur; 
print "<br>";
printf("Nilai : %.3f<br>", $nilai);
if ($status) {
    echo "status : Aktif";
} else{
    echo "status : Tidak Aktif";
}