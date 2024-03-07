<?php
$binatang = ["😺","🐰","🐵","🐴","🐣"];
array_push($binatang, "🐊");

$makanan = ["🍛", "🍗", "🥖", "🍦", "🍩"]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Daftar Binatang</h3>
    <ol>
        <?php for ($i = 0; $i <  count($binatang); $i++) { ?>
        <li><?php echo $binatang[$i]; ?> </li>  <?php  }?>
    </ol>

    <hr>
    <h3>Daftar Makanan</h3>
    <ul>
        <?php for ($j = 0; $j <  count($makanan); $j++) { ?>
        <li><?php echo $makanan[$j]; ?> </li>  <?php  }?>
        </ul>
<hr>

<h3>Daftar Binatang</h3>
<ol>
    <?php foreach ($binatang as $b) { ?>
        <li><?php echo $b; ?> </li>
        <?php } ?>
</ol>
<hr>
<ol>
<h3>Daftar Binatang</h3> //versi penulisan rapi
    <?php foreach ($binatang as $b) : ?>
        <li><?= $b; ?> </li>
        <?php endforeach ?>
</ol>
<hr>
<h3>Daftar Makanan</h3>
<ol>
    <?php foreach ($makanan as $m) : ?>
        <li><?= $m; ?> </li>
        <?php endforeach ?>
</ol>

</body>
</html>