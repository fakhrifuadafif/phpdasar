<?php 
session_start();

if (!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}
require 'function.php';
$mahasiswa = query("SELECT * FROM mahasiswa ");
// tombol cari di tekan

if (isset($_POST["cari"])) {
    $mahasiswa = cari ($_POST ["keyword"]);
}
?>

<!DOCTYPE html>
<html>
<head>
<script src="js/jquery-3.6.3.min.js"></script>
    <script src="js/script.js"></script>
   
<title>Halaman Admin</title>
<style>
    .loading { 
        width: 30px;
        position: absolute;
        top:140px;
        z-index: -1;
        display: none;
    }

     @media print {
        .logout, .tambah, .form-cari, .aksi{
            display: none;
        }

     }
</style>
</head>
<body>
    <a href="logout.php" class="logout">Logout</a> | <a href="cetak.php" target="_blank">Cetak</a>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php" class="tambah">Tambah data mahasiswa</a>
    <br><br>

    <form action="" method="post" class="form-cari">

        <input type="text" name="keyword" size="50" autofocus placeholder="masukkan keyword pencarian"
        autocomplete="off" id="keyword">
        <button type= "submit" name = "cari" id="tombol-cari"> Cari! </button>
        <img src="gambar/loading.gif" class="loading" alt="">
    </form>
    <br>
    <br>
    
    
    <div id="container">
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th class="aksi">Aksi</th>
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
            <td class="aksi">
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

    </div>
   
</body>
</html>