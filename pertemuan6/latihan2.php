<!-- Melanjutkan Pertemuan 5  -->

<?php
// $mahasiswa = 
// [["fakhri Fuad Afif","17180008","Fakhri@gmail.com","Teknik informatika"],
// ["Hasan","17180001","hasan@gmail.com","Teknik informatika"]];
//array asosiative
//definisinya sama seperti array numerik, kecuali 
//keynya adalah string yang kita buat sendiri
$mahasiswa = [[
    "nama" => "Fakhri fuad afif",
    "NIM" => "17180008",
    "email" => "fakhrifuad57@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "w.jpg"
],
[
    "nama" => "hasan",
    "NIM" => "17180001",
    "email" => "hasan@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "h.jpg"
    // "tugas" => [90, 80, 100]
]];
//echo $mahasiswa[1]["tugas"][2];
// array numerik didalam asosiative didalam numerik

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>

</head>
<body>
    <h1>Daftar Mahasiswa</h1>
<?php foreach ( $mahasiswa as $mhs ) : ?>
    <ul>
        <div class="gambar">
        <li>
            <img src="<?= $mhs["gambar"];?>" alt="gambar" height="100px" width="100px"></div>
        </li>
        <li> Nama: <?= $mhs["nama"]?></li>
        <li> Nim: <?= $mhs["NIM"]?></li>
        <li> email: <?= $mhs["email"]?></li>
        <li> jurusan: <?= $mhs["jurusan"]?></li>
    </ul>
    <?php endforeach ?>
</body>
</html>