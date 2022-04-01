<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db_name = "selflearning2";

    $connection = mysqli_connect($server, $username, $password, $db_name);
    if($connection){
        // echo "Koneksi berhasil <br>";
    }
?>