<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel ="stylesheet"  href = "Pendataan.css">
</head>
<body>
    <b>Registrasi akun</b>
    <form action="" method="post">

        <label for="email">Email</label><br>
        <input type="text" name="email" id = "email" required><br><br>

        <label for="username">username</label><br>
        <input type="text" name="username" id = "username" required ><br><br>

        <label for="password">password</label><br>
        <input type="password" name="password" id = "password" required><br><br>

        <label for="konfirmasi">konfirmasi password</label><br>
        <input type="password" name="konfirmasi" id = "password" required><br><br>

        <label for="">Alamat</label><br>
        <input type="text" name="alamat" id = "alamat" required><br><br>

        <input type="submit" name="register" id = "register">

        <p><a href="customer.php">login</a> jika sudah mempunyai akun</p>
    </form> 
</body>
</html>

<?php
require 'config.php';

if(isset($_POST['register'])){
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $konfirmasi = $_POST['konfirmasi'];
    $alamat = $_POST['alamat'];

    // cek konfirmasi psw
    if($password === $konfirmasi){
        $password = password_hash($password, PASSWORD_DEFAULT);
        $result= mysqli_query($db, "SELECT username from registrasi WHERE username = '$username'");
        if(mysqli_fetch_assoc($result)){
            echo "<script>
                alert('Konfirmasi password anda salah');
                documen.location.href = 'signup.php';
                </script>";
        }else{
            $query = "INSERT INTO registrasi(email, username, psw, alamat ) VALUES ('$email', '$username', '$password', '$alamat')";
            $result = $db -> query($query);
            if(mysqli_affected_rows($db) > 0){
                echo "<script>
                    alert('Registrasi telah berhasil');
                    document.location.href = 'customer.php'
                    </script>";
            }else{
                echo "<script>
                alert('Registrasi gagal);
                document.location.href = 'signup.php'
                </script>";
            }     
        }
    }else{
        echo "<script>
            alert('Registrasi telah berhasil');
            document.location.href = 'customer.php'
            </script>";
    }
}
?>