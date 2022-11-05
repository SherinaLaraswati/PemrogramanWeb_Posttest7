<?php 
    require 'config.php';

    $result = mysqli_query($db, "SELECT * FROM data_weartime");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hasil Pendataan</title>
    <link rel ="stylesheet"  href = "data.css">
</head>
<body>

    <h3>Pendataan SmartWatch</h3>
    <center>
    <a href="formulir.php">Tambah Data</a><br>
    <table border='1'>
        <tr><br>
            <th>No</th>
            <th>Nama Admin</th>
            <th>Nomer Telpon</th>
            <th>Merek SmartWatch</th>
            <th>Stock SmartWatch</th>
            <th>Jumlah SmartWatch</th>
            <th>Warna SmartWatch</th>
            <th>Kode SmartWatch</th>
            <th>Gambar SmartWatch</th>
            <th>Keterangan Waktu</th>
            <th colspan='2'>action</th>
        </tr>
        <?php 
            $i = 1;
            while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?=$i; ?></td>
            <td><?=$row['Nama_Admin']?></td>
            <td><?=$row['Nomer_Telepon']?></td>
            <td><?=$row['Merek_SmartWatch']?></td>
            <td><?=$row['Jumlah_Stock']?></td>
            <td><?=$row['Jumlah_Terjual']?></td>
            <td><?=$row['Warna_Tersedia']?></td>
            <td><?=$row['kode_SmartWatch']?></td>
            <td><img src="gambar_SW/<?=$row['gambar']?>" alt="" width = "100px"></td>
            <td><?=$row['keterangan']?></td>
            <td><a href="update.php?kode_SmartWatch=<?=$row['kode_SmartWatch']?>"> Update </a></td>
            <td><a href="delete.php?kode_SmartWatch=<?=$row['kode_SmartWatch']?>">Delete</a></td>
        </tr>
            <?php 
             $i++;
                }
            ?>
    </table>
</body>
</html>
