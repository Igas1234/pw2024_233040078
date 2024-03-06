<?php
$binatang = ["😻","🐰","🐵","🐨","🐮"];

array_push($binatang,"🐊");
array_pop($binatang);


$makanan = ["🍉","🍕","🍔","🍈","🍎"]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan array</title>
</head>
<body>
    <h3>Daftar binatang</h3>
    <ol>

    <?php for($i = 0;  $i < count($binatang); $i++) { ?>
        <li><?php echo $binatang [$i]; ?></li>
       <?php } ?>
    </ol>
<br>


    <h3>daftar makanan</h3>

    <ul>
<?php for($i = 0;  $i < count($makanan); $i++) { ?>
    <li><?php echo $makanan [$i]; ?></li>
   <?php } ?>
</ol>



<br>
<hr>




<ol>
    <ul></ul>
</ol>


</body>
</html>