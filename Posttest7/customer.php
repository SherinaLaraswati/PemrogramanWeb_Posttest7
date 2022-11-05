<?php
session_start();
require 'config.php';
if(isset($_SESSION['registrasi'])){
    header("Location: after.php");
    exit;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login Admin</title>
        <link rel ="stylesheet"  href = "Pendataan.css">
    </head>
    <b>Login Customer Wear Time</b>
    <form method="POST" action="">
   
        <div>
            <label>Masukkan username anda: </label><br>
            <input name = "username" type = "text" >
        </div>
        <div><br>
            <label>Masukkan password: </label><br>
            <input name ="password" type = "password" >
        </div>

        <div><br>
            <input type="submit" name="registrasi" value="Submit">
        </div>
    </form>
    <footer>
        <div class = "outer-footer">
        Copyright &copy; 2022 Desgin by SherinaLaraswati
    </footer>
</html>

<?php
    require 'config.php';
    if(isset($_POST['registrasi'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $result = mysqli_query($db, "SELECT * from registrasi WHERE username = '$username'");
        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row['psw'])){
                $_SESSION['registrasi'] = true;
                echo "<script>
                        alert('Login Berhasil')
                        document.location.href = 'index.php'
                        </script>";
            }else{
                echo "
                <script>
                    alert(' PASSWORD SALAH ... !! ');
                </script>
            ";
            }

        }else{
            echo "
                <script>
                    alert(' USERNAME TIDAK TERDAFTAR..!! ');
                </script>
            ";
        }
    }
    if(isset($_POST['regis'])){
        header('Location: regis.php');
    }
    

 ?>