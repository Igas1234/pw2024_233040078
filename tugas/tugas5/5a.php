<?php

$mahasiswa = [
    [
        "nama" => "muhammad fabregas",
        "nrp" => "2331",
        "email" => "@gmail.com",
        "jurusan" => "teknik",
        "gambar" => "",
    ],
    [
        "nama" => "yanti",
        "nrp" => "2332",
        "email" => "@gmail.com",
        "jurusan" => "teknik",
        "gambar" => "yanti.jpg",
    ],
    [
        "nama" => "yanto",
        "nrp" => "2333",
        "email" => "@gmail.com",
        "jurusan" => "teknik",
        "gambar" => "yanto.jpg",

    ],
    [
        "nama" => "jones",
        "nrp" => "2334",
        "email" => "@gmail.com",
        "jurusan" => "teknik",
        "gambar" => "jones.jpg",

    ],
    [
        "nama" => "alex",
        "nrp" => "2335",
        "email" => "@gmail.com",
        "jurusan" => "teknik",
        "gambar" => "alex.jpg",

    ],
    [
        "nama" => "brody",
        "nrp" => "2336",
        "email" => "@gmail.com",
        "jurusan" => "teknik",
        "gambar" => "brody.jpg",

    ],
    [
        "nama" => "abdul",
        "nrp" => "2337",
        "email" => "@gmail.com",
        "jurusan" => "teknik",
        "gambar" => "abdul.jpg",

    ],
    [
        "nama" => "almi",
        "nrp" => "2338",
        "email" => "@gmail.com",
        "jurusan" => "teknik",
        "gambar" => "almi.jpg",

    ],
    [
        "nama" => "alam",
        "nrp" => "2339",
        "email" => "@gmail.com",
        "jurusan" => "teknik",
        "gambar" => "alam.jpg",

    ],
    [
        "nama" => "dody",
        "nrp" => "23310",
        "email" => "@gmail.com",
        "jurusan" => "teknik",
        "gambar" => "dody.jpg",

    ],


];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Data mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="<?= $mhs["gambar"] ?>" width="150" height="150">
            </li>
            <li>Nama :<?= $mhs["nama"] ?></li>
            <li>Nrp :<?= $mhs["nrp"] ?></li>
            <li>Email :<?= $mhs["email"] ?></li>
            <li>jurusan :<?= $mhs["jurusan"] ?></li>
        </ul>
    <?php endforeach ?>
</body>

</html>