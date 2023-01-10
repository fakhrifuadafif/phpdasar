<?php 

require 'function.php';
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])){
  
    //cek apakah data berhasil di tambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo 
        //javascript pop up berhasil atau tidak
            "<script>
                alert('data berhasil di tambahkan');
                document.location.href = 'index.php';
            </script>";
    } else {      
        echo  
            "<script>
                alert('data gagal di tambahkan');
                document.location.href = 'index.php';
            </script>";
    }
} 
?>

<!DOCTYPE html>
<html>
<head>
<title>Tambah data mahasiswa</title>
</head>
<body>
    <h1> Tambah data mahasiswa</h1>
    <form action="" method="post">
        <ul>
            
            <li>
                <label for="nama">Nama  :	</label>
                <Input type="text" name="nama" id="nama"
                required>
            </li>
            <li>
                <label for="nim"> NIM :</label>
                <input type="text" name="nim" id="nim"
                required>
            </li>
            <li>
                <label for="email">Email	</label>
                <Input type="text" name="email" id="email"
                required>
            </li>
            <li>
                <label for="jurusan">Jurusan	</label>
                <Input type="text" name="jurusan" id="jurusan"
                required>
            </li>
            <li>
                <label for="gambar">Gambar	</label>
                <Input type="text" name="gambar" id="gambar"
                required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>


        </ul>


    </form>
</body>
</html>