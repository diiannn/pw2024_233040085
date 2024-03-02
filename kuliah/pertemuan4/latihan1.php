<?php

echo date ("j/n/y");
echo"<br>";

echo date ("l, j F  Y");

echo"<br>";
echo time();
echo"<br>";
echo time() + 86400; //86400 detik itu satu hari
echo"<br>";

echo date ("l", time() + 86400); //akan mencari hari di detik ini + sehari(86400 detik)
echo"<br>";
echo date ("l", time() + 86400 ); //akan mencari hari didetik ini + sehari*100 (mencari 100 hari dari sekarang)
echo"<br>";
echo date ("l", time() + 60 * 60 * 24 * 100);
echo"<br>";

echo mktime(0,0,0,2,27,2024);
echo"<br>";

//urutan mktime=>> jam, menit, detik, bulan, hari, tahun
echo date ("l", mktime(0,0,0,2,27,2024));
?>