<?php
function luas_segitiga ($alas , $tinggi) {
    return 1/2 * $alas * $tinggi;
}
$a = 5;
$t = 20;
echo "Luas segitiga :  ";
echo luas_segitiga($a , $t);
?>