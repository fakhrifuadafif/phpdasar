<?php 

require 'function.php';

// ambil data di url

$id = $_GET ["id"];

// query data mahasiswa berdasarkan id

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])){
  
    //cek apakah data berhasil di ubah atau tidak
    if (ubah($_POST) > 0) {
        echo 
        //javascript pop up berhasil atau tidak
            "<script>
                alert('data berhasil di ubah');
                document.location.href = 'index.php';

            </script>";
    } else {      
        echo  
            "<script>
                alert('data gagal di ubah');
                document.location.href = 'index.php';
            </script>";
            
    }
} 
?>

<!DOCTYPE html>
<html>
<head>
<title>Ubah data mahasiswa</title>
</head>
<body>
    <h1> Ubah data mahasiswa</h1>
    <form action="" method="post" enctype="multipart/from-data"> 
        <input type="hidden" name="id" value="<?= $mhs["id"];?>"><?php
        //<input type="hidden" name="gambarLama" value="<?= $mhs["gambar"];?>"> 
        <ul>
            
            <li>
                <label for="nama">Nama  :	</label>
                <Input type="text" name="nama" id="nama"
                required 
                value="<?= $mhs ["nama"]; ?>" >
            </li>
            <li>
                <label for="nim"> NIM :</label>
                <input type="text" name="nim" id="nim"
                required value="<?= $mhs ["nim"]; ?>" >
            </li>
            <li>
                <label for="email">Email    :</label>
                <Input type="text" name="email" id="email"
                required value="<?= $mhs ["email"]; ?>" >
            </li>
            <li>
                <label for="jurusan">Jurusan	:</label>
                <Input type="text" name="jurusan" id="jurusan"
                required value="<?= $mhs ["jurusan"]; ?>" >
            </li>
            <li>
                <label for="gambar">Gambar	:</label><br>
                <img src="gambar/<?= $mhs['gambar']; ?>"width="40"><br>
        
                <Input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>


        </ul>

    </form>
</body>
</html>