<?php
// 1. membuat Array
$hari = array ("Senin", "Selasa","Rabu");

$bulan = ["Januari", "Februari", "Maret"];

$mahasiswa = ["Dian", 3.7, false];

// 2. Mencetak  isi Array
//mencetak satu elemen pada array, tp menggunakan index

echo $hari[2];
echo "<br>";
echo $bulan[0];
echo "<br>";
echo $mahasiswa[1];

echo "<hr>";

//Mencetak seluruh isi array
//digunakan khusu untuk debugging
//var_dump atau print_r

var_dump ($hari);
echo "<br>";
print_r ($bulan);
echo "<br>";
print_r ($mahasiswa);
echo "<br>";


// 3. Memanipulasi
//Menambah isi array
//diakhir array:[] atau array push()
$hari[] = "kamis";
$hari[] = "Jum'at";
print_r($hari);
echo "<br>";
array_push($bulan, "April", "mei");
print_r($bulan);
echo "<br>";

echo "<hr>";

//di awal array: array_unshift()
array_unshift($mahasiswa, "233040085");
print_r($mahasiswa);
echo "<br>";
//menghapus isi array
//di akhir: array_pop()
//di awal: array_shift() 
array_pop($hari);
print_r($hari);
echo "<br>";
array_shift($bulan);
print_r($bulan)




?>