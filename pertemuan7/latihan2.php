<!-- ISSET UNTUK redirect  memindahkan dari sebuah halamna ke halaman lain-->

<?php
if ( !isset($_GET["nama"])  
) {
    
header("Location:latihan1.php");
exit;
}
?>


<!DOCTYPE html>
<head>
   
    <title>Detail staf</title>
   
</head>
<body>
    
    <ul><li><img src="gambar/<?= $_GET["gambar"];  ?>" height="100px" width="100px"></li>
        <li><?= $_GET ["nama"]; ?></li>
        <li><?= $_GET ["pekerjaan"]; ?></li>
        <li><?= $_GET ["email"]; ?></li>
        <li><?= $_GET ["alamat"]; ?></li>
    </ul>

<a href="latihan1.php">kembali</a>
    
</body>
</html>