<?php

$server = "localhost";
$username = "root";
$password = "";
$db_name = "pendataan_weartime";

$db = mysqli_connect($server, $username, $password, $db_name);

if(!$db){
    die("Tidak dapat terhubung");
}