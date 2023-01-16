<?php 
require 'function.php';

if (isset($_POST["register"])){

    if (registerasi ($_POST) > 0 ){
        echo "<script>
                alert ('user berhasil ditambahkan!');
                </script>";

    } else{
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Halaman Register</title>

<style>
    label {
        display: block;
    }
</style>
</head>
<body>

<h1>Halaman registrasi</h1>

<form action="" method="post"></form>

    <ul>
        <li>
            <label for="username">Username	</label>
            <Input type="text" name="username" id="username">
        </li>

        <li>
            <label for="password">password	</label>
            <Input type="password" name="password" id="password"> 
        </li>

        <li>
            <label for="password2">konfirmasi password	</label>
            <Input type="password" name="password2" id="password2">
        </li>
      
        <li>
                <button type="submit" name="register" > register! </button>

        </li>


    </ul>

</body>
</html>