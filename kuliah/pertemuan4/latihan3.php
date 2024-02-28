<?php
// menghitung total volume 2 kubus
// sisikubus a=9 ,sisi kubus b=4

// $sisi_a = 9;
// $sisi_b = 4;
// $volume_a = $sisi_a*$sisi_a*$sisi_a;
// $volume_b = $sisi_b*$sisi_b*$sisi_b;


// $total = $volume_a + $volume_b;

// echo " total volume kubus a dan b sama dengan = $total";

function luas_dua_kubus($a, $b) {
    $volume_a = $a * $a * $a;
    $volume_b = $b * $b * $b;

    $total = $volume_a + $volume_b;
    
    return $total;
}

echo "total volume kubus a dan b = ". luas_dua_kubus(9,4);
echo "<br>";

echo "total volume kubus a dan b = ". luas_dua_kubus(1.5,1.2);