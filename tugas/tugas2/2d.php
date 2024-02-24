<style>
    .hitam{
        background-color:black;
        width: 50px;
        height: 50px;
        display: inline-block;
        border: 1.5px solid black;
    }
    .putih{
        background-color:white;
        width: 50px;
        height: 50px;
        display: inline-block;
        border: 1.5px solid black;
    }
</style>

<?php

for($i =1; $i <= 5; $i++){
    for($j = 1;  $j <= 5; $j++){
        $jk = $i + $j;
        if($jk % 2 == 0){
            echo '<div class="hitam"></div>';
        }else{
            echo '<div class="putih"></div>';
        }
    }
     echo "<br>";
}

?>