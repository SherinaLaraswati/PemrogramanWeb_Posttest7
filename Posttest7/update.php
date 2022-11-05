<?php

    date_default_timezone_set("Asia/Singapore");

    require 'config.php';

    if(isset($_GET['kode_SmartWatch'])){
        $kode_SmartWatch = $_GET['kode_SmartWatch'];
    }

    $result = mysqli_query($db, 
        "SELECT * FROM data_weartime WHERE kode_SmartWatch='$kode_SmartWatch'");
    $row = mysqli_fetch_array($result);

    if(isset($_POST['Send'])){

        $nama = $_POST['nama'];
        $nomer= $_POST['nomer'];
        $merek = $_POST['merek'];
        $stock= $_POST['stock'];
        $jumlah= $_POST['jumlah'];
        $warna = $_POST['warna'];
        $waktu = date("d-m-y H:i:s a");

        $gambar = $_FILES['gambar']['name'];
        $x = explode('.', $gambar);

        $ekstensi = strtolower(end($x));
        $gambar_baru = "$nama.$ekstensi";

        $tmp = $_FILES['gambar']['tmp_name'];

        if(move_uploaded_file($tmp, "gambar_SW/".$gambar_baru)){
            $query = "UPDATE data_weartime SET 
                        Nama_Admin = '$nama',
                        Nomer_Telepon = '$nomer',
                        Merek_SmartWatch = '$merek',
                        Jumlah_Stock = '$stock',
                        Jumlah_Terjual = '$jumlah',
                        Warna_Tersedia = '$warna',
                        gambar = '$gambar_baru',
                        keterangan = '$waktu' WHERE kode_SmartWatch = '$kode_SmartWatch'";
            $result = $db->query($query); 
        }

        if($result){
            echo"
                <script>
                    alert('Data Berhasil di Update');
                    document.location.href = 'tampil.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('Data Gagal Dikirim');
                </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Data</title>
    <link rel ="stylesheet"  href = "data.css">
</head>
<body>
    
    <h3>Edit Pendataan SmartWatch</h3>
    <form action="" method="post" enctype = "multipart/form-data">
        <label for="">Masukkan nama admin: </label><br>
        <input type="text" name="nama" value=<?=$row['Nama_Admin']?>><br><br>
        <label for="">Masukkan no telpon admin: </label><br>
        <input type="number" name="nomer" value=<?=$row['Nomer_Telepon']?>><br><br>
        <label for="">Masukkan merek smartwatch: </label><br>
        <input type="text" name="merek" value=<?=$row['Merek_SmartWatch']?>><br><br>
        <label for="">Masukkan jumlah stock awal smartwatch: </label><br>
        <input type="number" name="stock" value=<?=$row['Jumlah_Stock']?>><br><br>
        <label for="">Masukkan jumlah smartwatch yang terjual: </label><br>
        <input type="number" name="jumlah" value=<?=$row['Jumlah_Terjual']?>><br><br>
        <label for="">Masukkan warna yang tersedia: </label><br>
        <input type="text" name="warna" value=<?=$row['Warna_Tersedia']?>><br><br>
        <label for="">Upload gambar</label><br>
        <input type="file" name="gambar"><br><br>   

        <input type="submit" name="Send">
    </form>
</body>
</html>