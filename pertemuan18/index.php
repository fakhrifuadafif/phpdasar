<?php 
session_start();

if (!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}
require 'function.php';

// pagenation
$jumlahdataperhalaman = 3;
$jumlahdata = count(query("SELECT * FROM mahasiswa"));
$jumlahhalaman = ceil($jumlahdata / $jumlahdataperhalaman);
$halamanaktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
$awaldata = ( $jumlahdataperhalaman * $halamanaktif ) - $jumlahdataperhalaman;

// halaman = 2, awalData = 4
// halaman = 3, awalData = 4



$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awaldata, $jumlahdataperhalaman ");
// tombol cari di tekan

if (isset($_POST["cari"])) {
    $mahasiswa = cari ($_POST ["keyword"] );
    
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Halaman Admin</title>
</head>
<body>
    <a href="logout.php">Logout</a>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah data mahasiswa</a>
    <br><br>

    <form action="" method="post">

        <input type="text" name="keyword" size="50" autofocus placeholder="masukkan keyword pencarian"
        autocomplete="off">
        <button type= "submit" name = "cari"> Cari! </button>
    </form>
    <br>

    <!-- navigasi -->
    <?php if($halamanaktif > 1 ) : ?>
     <a href="?halaman=<?= ($halamanaktif) - 1; ?>">&laquo;</a>
    <?php endif; ?>

    <?php for( $i = 1; $i <= $jumlahhalaman; $i++ ) : ?>
        <?php if( $i == $halamanaktif) : ?>
        <a href="?halaman= <?= $i;?>" style="font-weight: bold; color: red;
        "><?= $i; ?></a>
        <?php else : ?>   
            <a href="?halaman= <?= $i; ?>"><?= $i;?></a>
        <?php endif; ?>

    <?php  endfor; ?>

    <?php if($halamanaktif < $jumlahhalaman ) : ?>
     <a href="?halaman=<?= ($halamanaktif) + 1; ?>">&raquo;</a>
    <?php endif; ?>
    <br>
    <table  border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i="1" ?>
        <?php foreach ( $mahasiswa as $row ) : ?>

        <tr>
            <td> <?= $i; ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin')">ubah</a>
                <a href="hapus.php?id=<?= $row["id"]; ?>"onclick=" return confirm('yakin!')">hapus</a>
            </td>
            <td> <img src="gambar/<?php echo $row["gambar"];?>"witdh= "100"height="100"></td>
            <td> <?= $row ["nama"]; ?></td>
            <td> <?= $row ["nim"]; ?></td>
            <td> <?= $row ["email"]; ?></td>
            <td> <?= $row ["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
        

    </table>
</body>
</html>