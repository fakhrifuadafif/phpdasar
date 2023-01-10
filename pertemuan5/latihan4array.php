<!-- kasus nyata  array multi dimensi-->
array numerik arrey yang indexnya angka,
array pasangan key = index diawali 0 dan value
array asosiatif index berasosiasi dengan nilainya

<?php

$mahasiswa = [
    ["fakhri", "17180008","Teknik Informatika","fakhri@gmail.com"],  
    ["hasan", "17180001","Teknik Informatika","hasan@gmail.com"],
    ["hangga ", "17180002","Teknik Informatika","hangga@gmail.com"]
];
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
    <h1> Daftar Mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs ) : ?>
       
    
 <ul>
      <li>Nama:<?=$mhs[0];?></li>
      <li>NIM:<?=$mhs[1];?></li>
      <li>Jurusan:<?=$mhs[2];?></li>
      <li>Email:<?=$mhs[3];?></li>
 </ul>

 <?php endforeach ?>
</body>
</html>