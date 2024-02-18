<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1c</title>
    <style>
        .kotak {
            width: 70px;
            height: 70px;
            background-color: orange;
            border: 2px solid black;
            color: white;
            display: flex;
            
        }

        .kotak h3 {
            margin: auto;
        }

        .row {
            display: flex;
        }
    </style>
</head>
<body>

    <div class="row row-1">        
        <div class="kotak kotak1"><h3>1</h3></div>
    </div>
    
    <div class="row row-2">
        <div class="kotak kotak2"><h3>2</h3></div>
        <div class="kotak kotak2"><h3>2</h3></div>
    </div>

    <div class="row row-3">
        <div class="kotak kotak3"><h3>3</h3></div>
        <div class="kotak kotak3"><h3>3</h3></div>
        <div class="kotak kotak3"><h3>3</h3></div>
    </div>
</body>
</html>

<?php 
 $angka = 85;

echo "Aku adalah angka <b>$angka</b> <br>";
$angka *= 5;
echo "Jika aku dikali 5, maka aku sekarang menjadi <b>$angka</b> <br>";
$angka /= 2;
echo "Jika aku dibagi 2, maka aku sekarang menjadi <b>$angka</b> <br>";
$angka += 75;
echo "Jika aku ditambah 75, maka aku sekarang menjadi <b>$angka</b> <br>";
$angka -= 20;
echo "Jika akau dikurang 20, maka aku sekarang menjadi <b>$angka</b>";
 ?>
