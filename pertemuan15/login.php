<?php  

require 'function.php';
if (isset($_POST["Login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query ($conn, "SELECT  * FROM user WHERE username = '$username'" );
    // cek username
    if (mysqli_num_rows ($result) === 1) {
        
        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            header("Location: index.php");
            exit;
        }
    }
    $error = true;
}


?>

<!DOCTYPE html>
<html>
<head>
<title>Halaman Login</title>
</head>
<body>
    <h1> Halaman Login</h1>

    <?php if (isset($error)) :?>
        <p style="color: red; font-style: italic" >username /password salah!</p>
        <?php endif ?>

    <form action="" method="post">
        <li>
            <label for="username">Username :</label>
            <Input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password">Password :	</label>
            <Input type="password" name="password" id="password">
        </li>

        <li>
            <button type="submit" name="Login">Login</button>
        </li>

    </form>
</body>
</html>