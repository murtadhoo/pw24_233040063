<?php
function urutanAngka($angka)
{
    $angkaawal = 1;
    for ($i = 1; $i <= $angka; $i++) {
        for ($x = 1; $x <= $i; $x++) {
            echo $angkaawal++ . " ";
        }
        echo "<br>";
    }
}

echo urutanangka(10);
