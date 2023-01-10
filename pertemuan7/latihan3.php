<!DOCTYPE html>
<html>
<head>

    <title>POST</title>
</head>
<body>
    <?php if(isset($_POST["submit"])):?>
    <h1>Halo, Selamat datang, <?=$_POST["nama"]; ?>!</h1>
    <?php endif;?>

    <form action="" method="post">
        Masukan nama :
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>