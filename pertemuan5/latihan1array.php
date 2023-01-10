<?php
//array
// variabel yang memiliki banyak nilai

$hari = array("Senin","Selasa","Rabu","kamis","jumat","sabtu","minggu");
// membuat array cara baru
$bulan = ["Januari","Febuari","Maret"];
$arrl =[123,"tulisan", false];

// Menampilkan array
// var_dump() /print_r9()

// var_dump($hari);
// print_r($bulan);

// menampilkan 1 elemen pada array;
echo $arrl[1];
echo "<br>";
echo $bulan[2];
echo "<br>";
$bulan [] = "april";
echo $bulan [3];

?>