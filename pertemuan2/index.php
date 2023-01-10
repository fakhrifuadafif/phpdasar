<?php
// komentar ah
/*komentar dong*/
/*Syntaks
echo, print, print_r ,var_dump*/

echo "jum'at";
echo 'senin';
echo 123;
echo true;
var_dump("fakhrifuadafif");

// penulisan syintaks php
// 1.php didalam html
// 2.html didalam php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1> halo selamat datang <?php echo "kambing";?></h1>
<p><?php echo "ini adalah paragraf"?></p>    
</body>
</html>

<!-- 2.html didalam php -->
<?php echo "<h2>Fakhri fuad afif</h2>";
?>

<!-- variable & tipe data -->
<!-- tidak boleh diawali angka tapi boleh mengandung angka -->
<?php
$nama = "fakhri";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>
    <?php echo "$nama";?>
</body>
</html>

<!-- Operator / Aritmatika + - : x % -->

<?php 
$x = 10;
$y = 20;

echo $x*$y;

// operator penggabung string / concatenation /concet 
// .

$nama_depan = "fakhri";
$nama_belakang = "fuad afif";
echo $nama_depan . " " . $nama_belakang;
?>

<!-- operator assigment 
=,+=,:=,-=,%=, .= =-->
<?php 
$x =1;
$x -=5;
echo $x;

$nama = "Fakhri";
$nama .= "fuad";
$nama .= "afif";
echo $nama;

// operator perbandingan

var_dump(1 < 0);

// operator identitas ===,!== cek nilai & type data

var_dump(1 === "1")

// logika
// &&, ||, !
?> <?php
$z = 30;
var_dump($z < 20 || $z % 2 == 0)
?>

<!-- #Variable javascript -->