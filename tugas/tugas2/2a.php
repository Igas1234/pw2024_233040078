<?php
$depan = "fabregas";
$belakang = "muhammad";

for($i = 1; $i <= 100; $i++){
    if($i % 3 == 0 && $i % 5 == 0){
        echo "$belakang $depan<br>";
    }elseif($i % 3 == 0){
        echo "$depan<br>";
    }elseif($i % 5 == 0){
        echo "$belakang<br>";
    }else{
        echo "$i<br>";
    }
    
}
?>