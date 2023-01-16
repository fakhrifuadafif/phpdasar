<?php 

$conn = mysqli_connect ("localhost","root","","phpdasar");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row =mysqli_fetch_assoc($result)) {
        $rows [ ] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
    
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $email = htmlspecialchars ($data["email"]);
    $jurusan = htmlspecialchars ($data["jurusan"]);
    

    //UPLOAD GAMBAR
    $gambar = upload ();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO mahasiswa 
                VALUES 
    ('','$nama','$nim' ,'$email',
    '$jurusan','$gambar')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
 
}
  
function upload() {
    

    $namaFile = $_FILES ['gambar']['name'];
    $ukuranFile = $_FILES ['gambar']['size'];
    $error = $_FILES ['gambar']['error'];
    $tmpName = $_FILES ['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang di upload
    if ( $error === 4 ) {
    echo "<script>
        alert('pilih gambar terlebih dahulu!');
    </script>";
    return false; 
}
//  CEK apakah yang di upload gambar

$ekstensiGambarValid = ['jpg','jpeg','png'];
$ekstensiGambar = explode('.',$namaFile);
$ekstensiGambar = strtolower(end($ekstensiGambar));
if ( !in_array($ekstensiGambar, $ekstensiGambarValid)){
        echo "<script>
            alert ('yang anda upload bukan gambar!');
            </script>";
        return false;
}
if ($ukuranFile > 1000000){
    echo "<script>
        alert ('ukuran terlalu besar!');
        </script>";
        return false;
}


// lolos pengecekan, gambar siap upload
// generate nama gambar baru

$namaFileBaru = uniqid();
$namaFileBaru .= '.';
$namaFileBaru .= $ekstensiGambar;


move_uploaded_file( $tmpName , 'gambar/'.$namaFileBaru);
 return $namaFileBaru;
} 


function hapus($id) {
    global $conn;
    mysqli_query ($conn,"DELETE FROM mahasiswa WHERE id =$id");
    return mysqli_affected_rows ($conn);
}

function ubah ($data){ 
global $conn;

$id = $data["id"];
$nama = htmlspecialchars($data["nama"]);
$nim = htmlspecialchars($data["nim"]);
$email = htmlspecialchars ($data["email"]);
$jurusan = htmlspecialchars ($data["jurusan"]);
// $gambarLama = htmlspecialchars($data["gambarLama"]);
$gambar = htmlspecialchars($data["gambar"]);

// cek apakah user pililh gambar baru atau tidak

// if ($_FILES ['gambar']['error'] === 4){
//     $gambar = $gambarLama;
// } else {
//     $gambar = upload ();
// }

$query = "UPDATE mahasiswa SET
            nim= '$nim',
            nama='$nama',
            email = '$email',
            jurusan = '$jurusan',
            gambar = '$gambar'
        WHERE id = $id";

mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%' OR 
                                            nim LIKE '%$keyword%' OR
                                            email LIKE '%$keyword%' OR
                                            jurusan LIKE '%$keyword%'";

    return query ($query);  
}

function registerasi ($data) {
    global $conn;
    
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data ["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    
    //cek konfirmasi password
    
    if ($password !== $password2 ) {
        echo "<script>
                alert ('konfirmasi password tidak sesuai!');
            </script>";
            return false;
        }
    
}

?> 