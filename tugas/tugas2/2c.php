<style>
.kotak{
    display: inline-block;
    justify-content: center;
    width: 50px;
    height: 50px;
    background-color:brown;
    line-height:50px;
    text-align:center;
    border:1.5px solid black;
}
</style>

<?php
for($i = 10; $i >= 1; $i--){
    for($j = 1; $j <= $i; $j++){
        echo '<div class="kotak">'.$j.'</div>';
    }
    echo "<br>";
}
    

?>

