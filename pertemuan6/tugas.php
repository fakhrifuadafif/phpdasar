<!-- tugas
cari kasus sendiri 
contoh : data baju,film,mobil,buku. -->
<?php
$staf =[
    [
    "nama"=>"Aji",
    "pekerjaan"=> "guru",
    "umur"=>"25",
    "alamat"=>"bintaro" 
    ],
    [
    "nama"=>"hangga",
    "pekerjaan"=>"IT ",
    "umur"=>"24",
    "alamat"=>"jogja"
    ],
    [
    "nama"=>"hasan",
    "pekerjaan"=>"IT ",
    "umur"=>"25",
    "alamat"=>"lampung"
    ]
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data staff</title>
    <style>
        .ukuran {
            height: 3000px;
            width: 3000px;
            background-color: #bada55 ;
            float: left;
        }
    </style>
    <h1>data staf daarul quran</h1>
</head>
<body>
<div class="ukuran">

<?php foreach ( $staf as $s):?>
    <ul>
        <li> NAMA       :<?= $s["nama"]; ?></li>
        <li> PEKERJAAN  :<?= $s["pekerjaan"]; ?></li>
        <li> UMUR       :<?= $s["umur"]; ?></li>
        <li> ALAMAT     :<?= $s["alamat"]; ?></li>

    </ul>
    <?php endforeach ?>
    </div>
    
</body>
</html>