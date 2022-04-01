<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
    <div class="prof-content">
        <div class="pagetitle">
            <h1>Profil Pribadi</h1>
        </div>
        <table>
            <tr>
                <td class="c-1">Nama Depan</td>
                <td class="c-2"><?php echo $data['namaDepan']; ?></td>
                <td class="c-1">Nama Tengah</td>
                <td class="c-2"><?php echo $data['namaTengah']; ?></td>
                <td class="c-1">Nama Belakang</td>
                <td class="c-2"><?php echo $data['namaBelakang']; ?></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td class="c-2"><?php echo $data['tempatLahir']; ?></td>
                <td>Tanggal Lahir</td>
                <td class="c-2"><?php echo $data['tanggalLahir']; ?></td>
                <td>NIK</td>
                <td class="c-2"><?php echo $data['nik']; ?></td>
            </tr>
            <tr>
                <td>Warga Negara</td>
                <td class="c-2"><?php echo $data['wargaNegara']; ?></td>
                <td>E-mail</td>
                <td class="c-2"><?php echo $data['email']; ?></td>
                <td>No HP</td>
                <td class="c-2"><?php echo $data['noHP']; ?></td>
            </tr>
            <tr>
                <td>Alamat </td>
                <td class="c-2"><?php echo $data['alamat']; ?></td>
                <td>Kode Pos</td>
                <td class="c-2"><?php echo $data['kodePos']; ?></td>
                <td>Foto Profil</td>
                <td class="c-2"><?php 
                        $image=$data['profPic']; 
                        echo "<img src='$image' width='50%' height='50%'>";
                    ?>
                </td>
            </tr>
        </table>

        <div class="editBtn">
            <a href="EditProfile.php?id=<?php echo $data['username'] ?>">Edit Profile</a>
        </div>


    </div>
</body>
</html>