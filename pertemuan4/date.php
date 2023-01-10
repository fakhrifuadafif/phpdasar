<!-- Function in php
1. Built-in Function ada di php

 String
strlen()
strcmp()
explode()
htmlspecialchars()

Utility
var_dump()
isset()
empty()
die()
sleep()

2. User-Defined Function dibuat sendiri-->

<?php
    // echo date("l,d-M-Y");
?>
<!-- https://www.php.net/manual/en/function.date -->
<!-- Time
UNIX Timestamp /EPOCH time
detik yang sudah berlalu sejak 1 Januari 1970
echo time() -->
<!-- Menghitung 2 th ke belakang -->
<?php
// echo date("d M Y", time ()-60*60*24*100);
?>
<?php
// mktime membuat sendiri detik
// mktime (0,0,0,0,0,0)
// jam menit detik bulan tanggal tahun
echo date("l,d-M-Y g:i:s a", mktime(0,0,0,12,13,1998));
?>


