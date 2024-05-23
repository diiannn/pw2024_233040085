<?php 
function cetak_bintang($angka) {
    for ($i = 1; $i <= $angka; $i++) {
        echo str_repeat('*', $i) . '<br>';
    }
}

cetak_bintang(3);


?>