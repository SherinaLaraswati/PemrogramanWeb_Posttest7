<?php 

require 'config.php';

if(isset($_GET['kode_SmartWatch'])){
    $kode_SmartWatch = $_GET['kode_SmartWatch'];

    $hapus_formulir= mysqli_query($db,
                        "SELECT * FROM data_weartime WHERE kode_SmartWatch='$kode_SmartWatch'");
    $row = mysqli_fetch_array($hapus_formulir);

    $gambar = $row['gambar'];
    $hapus = "gambar_SW/$gambar";

    if(file_exists($hapus)){
        unlink($hapus);
    }

    $result = mysqli_query($db, 
        "DELETE FROM data_weartime WHERE kode_SmartWatch='$kode_SmartWatch'");

    if($result){
        header("Location:tampil.php");
    }else{
        echo "<script>
                alert('Data gagal dihapus');
            </script>";
    }
}