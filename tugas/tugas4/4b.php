<?php
$komputer = ["Motherboard","Processor","Hard disk","Pc coller","VGA Card","SSD"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
  <h3>Macam macaam perangkat keras komputer</h3>

<ol>
<?php foreach($komputer as $kom) : ?>
  <li><?php echo $kom ?></li>
<?php endforeach ?>
</ol>

<h3>Macam macaam perangkat keras komputer baru</h3>

<ol>
<?php array_push($komputer, "Card reader","Modem"); asort($komputer); ?>
<?php foreach($komputer as $kom) : ?>
  <li><?php echo $kom ?></li>
<?php endforeach ?>
</ol>


</body>
</html>