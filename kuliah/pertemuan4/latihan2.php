<?php
// hitung total volume 2 kubus
// sisi kubus a = 9, sisi kubus b = 4

$sisi_a = 9;
$sisi_b = 4;

$volume_a = $sisi_a * $sisi_a * $sisi_a;
$volume_b = $sisi_b * $sisi_b * $sisi_b;

$total = $volume_a + $volume_b;

echo "total volume kubuas A dan B = $total";

function total_volume_dua_kubus($a, $b)
{
    $volume_a = $a * $a * $a;
    $volume_b = $b * $b * $b;
    $total = $volume_a + $volume_b;
}