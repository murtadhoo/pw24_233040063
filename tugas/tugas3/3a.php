<?php
$r = 10;
$r2 = 20;

function luas_lingkaran($r)
{
    return 3.14 * $r * $r;
}

function keliling_lingkaran($r2)
{
    return 2 * 3.14 * $r2;
}


echo "<h4>Menghitung luas lingkaran</h4>";
echo "<br>";
echo "jari jari = $r cm";
echo " <br>";
echo "luas lingkaran =" . luas_lingkaran($r) . "cm <sup>2 </sup>";
echo "<br>";
echo "<hr>";
echo "<h4>menghitung keliling lingkaran</h4>";
echo "<br>";
echo "jari jari = $r2 cm";
echo "<br>";
echo "keliling lingkaran = " . keliling_lingkaran($r2) . "cm";
echo "<hr>";
