<?php 
require '../function.php';

$keyword = $_GET["keyword"];
$query =  "SELECT * FROM mahasiswa WHERE 
            nama LIKE '%$keyword%' OR 
            nim LIKE '%$keyword%' OR
            email LIKE '%$keyword%' OR
            jurusan LIKE '%$keyword%'";
;
$mahasiswa = query($query);


?>
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