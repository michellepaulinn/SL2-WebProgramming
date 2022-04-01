<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        <?php include "style.css" ?>
    </style>
</head>
<body>
    <?php
        session_start();
        include("config.php");
        if (isset($_GET['id'])){
            $id = $_GET['id'];
            $str_query = "select*from userdata where username = '".$id."'";
            $query = mysqli_query($connection, $str_query);
            $data = mysqli_fetch_array($query);
        }
    ?>
    <nav>
        <div class="title">Aplikasi Pengelolaan Keuangan</div>
        <div class="nav-bar">
            <a href="home.php?id=<?php echo $data['username'] ?>">Home</a>
            <a href="profile.php?id=<?php echo $data['username'] ?>">Profile</a>
            <a href="logout.php">LogOut</a>
        </div>
    </nav>
    <div class="content">
        <h2>Halo <?php echo $data['namaDepan']." ".$data['namaTengah']." ".$data['namaBelakang']?> </h2>
        <br>
        <h2>Selamat datang di aplikasi Pengelolaan keuangan!</h2>
</div>  
</body>
</html>