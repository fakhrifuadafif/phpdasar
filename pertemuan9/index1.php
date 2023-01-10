<?php 
// koneksi ke database

$conn = mysqli_connect ("localhost","root","","phpdasar");

//ambil data mahasiswa/ query

$result = mysqli_query ($conn, "SELECT * FROM mahasiswa");

//ambil data dari object result
//msqli_fetch_row () mengembalikan aray numerik
//msqli_fetch_assoc () mengembalikan array assosiative
//msqli_fetch_array () mengembalikan keduanya
//msqli_fetch_object () ($mhs-> nama); mengembalikan objek

// while ( $mhs= mysqli_fetch_assoc($result)){
//     var_dump($mhs);
// }



?>


<!DOCTYPE html>
<html>
<head>
<title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
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
        <?php while ( $row = mysqli_fetch_assoc($result)) : ?>

        <tr>
            <td> <?= $i; ?></td>
            <td>
                <a href="">ubah</a>
                <a href="">hapus</a>
            </td>
            <td> <img src="gambar/<?php echo $row["gambar"];?>"witdh= "100"height="100"></td>
            <td> <?= $row ["nim"]; ?></td>
            <td> <?= $row ["nama"]; ?></td>
            <td> <?= $row ["email"]; ?></td>
            <td> <?= $row ["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
        

    </table>
</body>
</html>