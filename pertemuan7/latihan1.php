<!-- 
variable scope /lingkup variabel
1.variable lokal

2.variable global
global $x

3.variable superglobal (semua array asosiative)
$_GET
$_POST  
$_REQUEST
$_SESSION
$_COOKIE
$_SERVER
$_ENV

Metode RIQUEST GET POST -->


<?php
$staf =[
    [
    "gambar"=> "w.jpg",
    "nama"=>"Aji",
    "pekerjaan"=> "guru",
    "email"=>"aji@gmail.com",
    "alamat"=>"bintaro"
    ],
    [
    "gambar"=> "h.jpg",
    "nama"=>"hangga",
    "pekerjaan"=>"IT",
    "email"=>"hangga@gmail.com",
    "alamat"=>"jogja"
    ],
    [
    "gambar"=> "w.jpg",
    "nama"=>"hasan",
    "pekerjaan"=>"IT",
    "email"=>"hasan@gmail.com",
    "alamat"=>"lampung"
    ]
    ];
?>

<!DOCTYPE html>
<html>
<head>

    <title>GET</title>

</head>
<body>
    <h1>Daftar Staf</h1>
    
    <ul>
        <?php foreach($staf as $s) : ?>
        <li>
            <a href="latihan2.php?nama=<?= $s["nama"];?>&pekerjaan=<?=$s["pekerjaan"];?>&email<?= $s["email"];?>&alamat<?= $s["alamat"];?>&gambar=<?=$s["gambar"]; ?>"><?= $s["nama"]; ?></a>
        </li>
        <?php endforeach ?>
    </ul>

</body>
</html>
<?php
