<?php
// 
function urutanAngka($baris){
    $k = 1;
    for($i = 1; $i <= $baris; $i++){
        for($j = 1; $j <= $i;  $j++){
            echo "$k ";
           $k++;
        }
      echo"<br>";
      }
}

echo urutanAngka(5);

?>