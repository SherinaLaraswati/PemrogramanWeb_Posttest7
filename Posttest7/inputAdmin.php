<head>
    <meta charset="UTF-8">
    <title>Hail pendataan</title>
    <link rel ="stylesheet"  href = "Pendataan.css">
</head>

<footer>
    <div class = "outer-footer">
    Copyright &copy; 2022 Desgin by SherinaLaraswati
</footer>

<?php

$nama = @$_REQUEST['nama'];
$nomer = @$_REQUEST['nomer'];
$merek = @$_REQUEST['merek'];
$stock = @$_REQUEST['stock'];
$jumlah = @$_REQUEST['jumlah'];
$warna = @$_REQUEST['warna'];
                                                        


if ($nama){
    echo "<strong>Nama: </strong> {$nama} <br>"; 
}
if ($nomer){
    echo "<strong>Nomer Telepon: </strong> {$nomer} <br>"; 
}
if ($merek){
    echo "<strong>Alamat: </strong> {$merek} <br>"; 
}
if ($nama){
    echo "<strong>Stock smartwatch: </strong> {$stock} <br>"; 
}
if ($nomer){
    echo "<strong>Jumlah smartwatch yang terjual: </strong> {$jumlah} <br>"; 
}
if ($nomer){
    echo "<strong>warna yang tersedia: </strong> {$warna} <br>"; 
}
?>
<!DOCTYPE html>
<html>

    <body>

        <div class="navbar">
            <div class = "main">
                <ul>
                    <li class = "active"><a href ="index.php">Home</a></li>
                    <li><a href ="Admin.php">Login Admin</a></li>
                    <li><a href ="Customer.php">Login Customer</a></li>
                </ul>
            </div>
        </div>

    <footer>
        <div class = "outer-footer">
        Copyright &copy; 2022 Desgin by SherinaLaraswati
    </footer>


    </body>
</html>