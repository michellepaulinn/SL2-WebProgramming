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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit profile</title>
    <style>
        <?php include "style.css" ?>
    </style>
</head>
<body>
    <nav>
        <div class="title">Aplikasi Pengelolaan Keuangan</div>
    </nav>
    <div class="prof-content">
        <div class="pagetitle">
            <h1>Edit Profile</h1>
        </div>
        <form action="saveChanges.php?id=<?php echo $data['username'] ?>" method="post" enctype = "multipart/form-data">
            <table>
                <tr>
                    <td class="c-1">Nama Depan</td>
                    <td class="c-2"><input type="text" name="nama_dpn" id="nama_dpn" value ="<?php echo $data['namaDepan']?>" ></td>
                    <td class="c-1">Nama Tengah</td>
                    <td class="c-2"><input type="text" name="nama_tgh" id="nama_tgh" value ="<?php echo $data['namaTengah']?>"></td>
                    <td class="c-1">Nama Belakang</td>
                    <td class="c-2"><input type="text" name="nama_blkg" id="nama_blkg" value ="<?php echo $data['namaBelakang']?>"></td>
                </tr>
                <tr>
                    <td class="c-1">Tempat Lahir</td>
                    <td class="c-2"><input type="text" name="tpt_lahir" id="tpt_lahir" value ="<?php echo $data['tempatLahir']?>"></td>
                    <td class="c-1">Tanggal Lahir</td>
                    <td class="c-2"><input type="date" name="tgl_lahir" id="tgl_lahir" value ="<?php echo $data['tanggalLahir']?>"></td>
                    <td class="c-1">NIK</td>
                    <td class="c-2"><input type="text" name="nik" id="nik" value ="<?php echo $data['nik']?>"></td>
                </tr>
                <tr>
                    <td class="c-1">Warga Negara</td>
                    <td class="c-2"><input type="text" name="wn" id="wn" value ="<?php echo $data['wargaNegara']?>"></td>
                    <td class="c-1">E-mail</td>
                    <td class="c-2"><input type="text" name="email" id="email" value ="<?php echo $data['email']?>"></td>
                    <td class="c-1">No HP</td>
                    <td class="c-2"><input type="text" name="nohp" id="nohp" value ="<?php echo $data['noHP']?>"></td>
                </tr>
                <tr>
                    <td class="c-1">Alamat </td>
                    <td class="c-2"><input type="text-area" name="alamat" id="alamat" value ="<?php echo $data['alamat']?>"></td>
                    <td class="c-1">Kode Pos</td>
                    <td class="c-2"><input type="text" name="kd_pos" id="text" value ="<?php echo $data['kodePos']?>"></td>
                    <td class="c-1">Foto Profil</td>
                    <td class="c-2">
                        <?php 
                            $image=$data['profPic']; 
                            echo "<img src='$image' width='50%' height='50%'>";
                        ?>
                    <input type="file" name="prof_pic" id="prof_pic">
                    </td>
                </tr>
            </table>

            <div class="buttons">
                <div class="kembali">
                    <a href="profile.php?id=<?php echo $data['username'] ?>">Kembali</a>
                </div>
                <div class="saveBtn">
                    <input type="submit" name = "submit" value="Save Changes">
                </div>
            </div>

        </form>


    </div>
</body>
</html>