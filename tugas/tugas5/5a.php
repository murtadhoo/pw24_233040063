<?php
$mahasiswa = [
    [
        "nama" => "Murtadho",
        "nrp" => "233040063",
        "email" => "murtadhounpas@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "dho.jpg"
    ],

    [
        "nama" => "Emmir Fahrezi",
        "nrp" => "233040054",
        "email" => "emmirfahrezi@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "emmir.jpg"
    ],

    [
        "nama" => "Jhosua Jeremi Matulessy",
        "nrp" => "233040064",
        "email" => "jhosua@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "jo.jpg"
    ],

    [
        "nama" => "Sufi Nadzhiffa",
        "nrp" => "233040044",
        "email" => "sufinadzhiffa@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "sufi.jpg"
    ],

    [
        "nama" => "Dzikrie Izzy Kurniawan",
        "nrp" => "233040052",
        "email" => "dzikrie@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "dzik.jpg"
    ],

    [
        "nama" => "Ghani Aliyandi",
        "nrp" => "233040049",
        "email" => "ghani@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "ghani.jpg"
    ],

    [
        "nama" => "Ikhwan Azhary",
        "nrp" => "233040066",
        "email" => "ikhwan@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "wan.jpg"
    ],

    [
        "nama" => "Muhammad Wilmar Rizky Ardhana Jasrianto",
        "nrp" => "233040050",
        "email" => "wilmarardhana9@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "wil.jpg"
    ],

]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>" alt="">
            </li>

            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>