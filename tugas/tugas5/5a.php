<?php
$mahasiswa = [
    [
    "nama" => "Dian Astri",
     "nrp" => "233040085",
     "email" => "dian85@gmail.com",
     "jurusan" => "Teknik Informatika",
     "gambar" => "img1.jpeg"
    ],
    [
    "nama" => "Firda Faridatul Fajriyanti",
     "nrp" => "233040098",
     "email" => "frdaaaa@gmail.com",
     "jurusan" => "Teknik Informatika",
     "gambar" => "img2.jpeg"
    ],
    [
    "nama" => "Silma Tsania Nurrasy",
     "nrp" => "233040107",
     "email" => "silmaatsania@gmail.com",
     "jurusan" => "Teknik Informatika",
     "gambar" => "img3.jpeg"
    ],
    [
    "nama" => "Dwi Yulianti",
     "nrp" => "233040103",
     "email" => "dwyll@gmail.com",
     "jurusan" => "Teknik Informatika",
     "gambar" => "img4.jpeg"
    ],
    [
    "nama" => "Amaliyah Nur Haida Jum'ati",
     "nrp" => "233040082",
     "email" => "aaaamaliya@gmail.com",
     "jurusan" => "Teknik Informatika",
     "gambar" => "img5.jpg"
    ],
    [
    "nama" => "Maelani Ningrum",
     "nrp" => "233040164",
     "email" => "Maelaninimgrum@gmail.com",
     "jurusan" => "Teknik Informatika",
     "gambar" => "img6.jpeg"
    ],
    [
    "nama" => "Ica Aprilia Putri",
     "nrp" => "233040108",
     "email" => "Aprilia@gmail.com",
     "jurusan" => "Teknik Informatika",
     "gambar" => "img7.jpeg"
    ],
    [
    "nama" => "Desi Hafita Ashri",
     "nrp" => "233040165",
     "email" => "desihafita@gmail.com",
     "jurusan" => "Teknik Informatika",
     "gambar" => "img8.jpeg"
    ],
    [
    "nama" => "Meta Cantika Dewi",
     "nrp" => "233040100",
     "email" => "metacantika1@gmail.com",
     "jurusan" => "Teknik Informatika",
     "gambar" => "img9.jpeg"
    ],
    [
    "nama" => "Lalisa manoban",
     "nrp" => "233040188",
     "email" => "Lalisamnbn@gmail.com",
     "jurusan" => "Teknik Informatika",
     "gambar" => "img10.jpeg"
    ]
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Daftar Mahasiswa</title>
    <style>
        img {
            width: 100px;
            height: 100px;
            border: 1px solid;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>" alt="">
        </li>

        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["nrp"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
      
    </ul>
    <?php endforeach; ?>
</body>
</html>