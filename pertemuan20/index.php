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
</head>
<body>
    <a href="logout.php">Logout</a>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah data mahasiswa</a>
    <br><br>

    <form action="" method="post">

        <input type="text" name="keyword" size="50" autofocus placeholder="masukkan keyword pencarian"
        autocomplete="off" id="keyword">
        <button type= "submit" name = "cari" id="tombol-cari"> Cari! </button>
    </form>
    
    <div id="container">
    <table border="1" cellpadding="10" cellspacing="0">
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

    </div>
   
</body>
</html>