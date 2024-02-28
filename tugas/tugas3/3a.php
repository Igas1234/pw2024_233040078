<?php
echo "<h4>menghitung luas lingkaran</h4>";
function hitungluaslingkaran($r){
    echo "jari-jari =$r<br>";
    $l = $r * $r* 3.14;
    echo "luas lingkaran =$l cm<sup>2</sup><br>";

}
echo hitungluaslingkaran(10);
echo "<hr>";

echo "<h4>menghitung keliling lingkaran</h4>";
function hitungkelilinglingkaran($r){
    echo "jari-jari =$r<br>";
    $k = 2 * $r* 3.14;
    echo "luas lingkaran =$k cm<br>";

}
echo hitungkelilinglingkaran (20);

?>