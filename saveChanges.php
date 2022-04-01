<?php
    include("config.php");
    if(isset($_POST['submit'])){
        // var_dump($_FILES['prof_pic']['error']);
        $fileName = $_FILES['prof_pic']['name'];
        $tempName = $_FILES['prof_pic']['tmp_name'];
        

        $dir = "profPic";
        if (!file_exists($dir)) {
            mkdir($dir, 0777, true);
        }
        $profpic = $dir."/".$fileName;
        $upload = move_uploaded_file($tempName, $profpic);

        $id = $_GET['id'];

        $str_query = "update userdata set 
        nik = '".$_POST['nik']."',
        namaDepan = '".$_POST['nama_dpn']."',
        namaTengah = '".$_POST['nama_tgh']."',
        namaBelakang = '".$_POST['nama_blkg']."',
        tempatLahir = '".$_POST['tpt_lahir']."',
        tanggalLahir = '".$_POST['tgl_lahir']."',
        wargaNegara = '".$_POST['wn']."',
        email = '".$_POST['email']."',
        noHP = '".$_POST['nohp']."',
        alamat = '".$_POST['alamat']."',
        kodePos = '".$_POST['kd_pos']."',
        profPic = '".$profpic."'
        

        where username = '$id'
        ";
        $query = mysqli_query($connection, $str_query);


        if($query){
            echo "<script>";
                echo "alert('Perubahan disimpan!')";
            echo "</script>";
            echo "<script>";
                echo "window.location='profile.php?id=$id'";
            echo "</script>";
        }
        else{
            echo "<script>";
                echo "alert('Perubahan Gagal Disimpan!')";
            echo "</script>";
            echo "<script>";
                echo "window.location='profile.php?id=$id'";
            echo "</script>";
            echo mysqli_error();
        }
    }

?>