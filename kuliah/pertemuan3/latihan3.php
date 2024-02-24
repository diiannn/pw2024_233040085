<?php 
echo "Mulai <br>";
$nilai_awal = 5; //==> nillai awal
while ($nilai_awal <= 100) {
    echo "Hello World $nilai_awal x! <br>";

   // $nilai_awal = $nilai_awal + 5;
   $nilai_awal += 5;
}
echo "Selesai <br>";

echo "<hr>";

//untuk hitung mundur
echo "Mulai <br>";
for ($i = 10; $i >= 1; 
$i--) {
    echo "Hello World $i x! <br>";
}
echo "Selesai";

?>