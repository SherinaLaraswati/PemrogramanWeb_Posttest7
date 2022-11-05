<?php
    session_start();
    require 'config.php';
    if(!isset($_SESSION['registrasi']))
    {
        echo"
            <script>
                alert('Akses Ditolak, silahkan Log In Terlebih Dahulu');
                document.location.href = 'signup.php';
            </script>";
    }
    else
    {
        $username = $_SESSION['register'];
    }
?> 

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Landing Page Website Smart Watch</title>
        <link rel ="stylesheet"   href = "style.css">
    </head>

    <body>
        <div class ="style">
            <div class="navbar">
                    <div class="logo">
                        <a href = "#"></a>
                        <p id="web">
                            Wear Time
                            <script>
                                document.getElementById("web").onclick=tampil;

                                function tampil(){
                                    document.getElementById("web").innerHTML ="Smart Watch";
                                }
                            </script>

                        </p> 
                    </div>
                    <div class = "main">
                        <ul>
                            <li class = "active"><a href ="Home.html">Home</a></li>
                            <li><a href ="Admin.php">Login Admin</a></li>
                            <li><a href ="tampil.php">Tampilan Pendataan</a></li>
                            <li><a href ="logout.php">Logout</a></li>
                        </ul>

                    </div>
                    <div id="theme">
                        <div onclick="setDarkMode(true)" id="darkButton" class="icon"><img src="icon.jpg"></div>
                        <div onclick="setDarkMode(false)" id ="lightButton" class="icon is-hidden"><img src="icon.jpg" ></div>
                    </div>
                    <script src="main.js"></script>
            </div>

        </div>

        <footer>
           <div class = "outer-footer">
            Copyright &copy; 2022 Desgin by SherinaLaraswati
        </footer>


    </body>
</html>

