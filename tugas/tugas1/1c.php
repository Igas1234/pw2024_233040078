<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

.kotak{
    width: 100vh;
}

.balok{
    display: flex;
}

.kotak1{
    width: 100px;
    height: 100px;
    background-color: brown;
    border: 10px solid black;
    font-size:50px;
    display: flex;
    align-items:center;
    justify-content:center;
}
    </style>
</head>


<body>
  <div class="kotak">
<div class="balok">
    <div class="kotak1">1</div>
</div>
<div class="balok">
    <div class="kotak1">2</div>
    <div class="kotak1">2</div>
</div>
<div class="balok">
    <div class="kotak1">3</div>
    <div class="kotak1">3</div>
    <div class="kotak1">3</div>
</div>

  </div>
</body>
</html>