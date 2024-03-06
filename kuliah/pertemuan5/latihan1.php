<?php
// belajar membuat array 

$hari = array("senin","selasa","rabu");

$bulan = ["januari","februari","maret"];

$mahasiswa = ["fabregas",2.5,false];


//mencetak isi array
// mencetak satu elemen pada array, ,menggunakan index

echo $hari[2];
echo "<br>";
echo $bulan[1];
echo "<br>";

echo $mahasiswa[1];

echo "<br>";

// mencetak seluruh array
// digunakan khusus untuk debugging
//var_dump() atau print_r()

var_dump($hari);
echo "<br>";

print_r($bulan);
echo "<br>";

var_dump($mahasiswa);
echo "<br>";
print_r($mahasiswa);
echo "<br>";
echo "<br>";

// memanipulasi isi array 
// menambah isi array
// di akhir array: []atau array_push()

$hari[] = "kamis";
$hari[] = "jumat";

print_r($hari)  ;
echo "<br>";
echo "<br>";
echo "<br>";


array_push($bulan, "april");

print_r($bulan);

echo "<br>";
echo "<br>";


//di awal array :array_unshift()
array_unshift($mahasiswa,"233040078");
print_r($mahasiswa);
echo "<br>";
echo "<br>";

//menghapus isi array
// di akhir : array_pop()
// di awal : array_shift()


 array_pop($hari);
 print_r($hari);


 echo "<br>";
 echo "<br>";


 array_shift($bulan);
 print_r($bulan);
?>