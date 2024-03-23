

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 6a</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            border: 2px solid black;
            display: flex;
            margin: 2px;
        }

        .kotak p {
            margin: auto;
        }


        .row {
            display: flex;
        }

        .row1 {
            .kotak {
                background-color: #A8CD9F;
            }
        }

        .row2 {
            .kotak {
                background-color: white;
            }
        }
    </style>
</head>
<body>
    <?php if(!isset($_GET["angka"])) : ?>
        <h1>Masukan Variable angka ke dalam url</h1>
    <?php else : ?>
        <?php for ($i = $_GET["angka"]; $i >= 1; $i--) : ?>
            <?php if($i % 2 === 0) : ?>
                <div class="row row1">
            <?php else : ?>
                <div class="row row2">
            <?php endif; ?>
                <?php for ($j = 1; $j <= $i; $j++) : ?>
                    <div class="kotak"><p><?= "$i" ?></p></div>
                <?php endfor ; ?>
                    <br>            
        </div>
        <?php endfor ; ?>
    <?php endif; ?>
</body>
</html>