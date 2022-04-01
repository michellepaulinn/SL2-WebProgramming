<?php
    session_start();
    include("config.php");
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $str_query = "select*from userdata where username ='".$username."'";
        $query = mysqli_query($connection, $str_query);
        $msg = "";
        $data = mysqli_fetch_array($query);

        if($data==""){
            $msg = "Akun anda belum terdaftar, silahkan Register terlebih dahulu.";
            alert($msg);
        }else if( $password != $data['password'] ){
            $msg = "Password invalid, silahkan coba lagi.";
            alert($msg);
        }else{
            echo "<script>";
                echo "alert('Login Berhasil!')";
            echo "</script>";
            echo "<script>";
                echo "window.location='home.php?id=".$data['username']."'";
            echo "</script>";
        }

    }
    function alert($msg){
        echo "<body style='background-color : D9D7F1' justify-content:'center' margin:'auto'>";
            echo "<h1>".$msg."</h1><br/>";
            echo "<a href='login.php' 
            style = 'text-decoration:none; color:black; padding: 1em; 
            background-color: #FFCBCB;
            border-radius:5px;
            border: 1px solid;
            font-weight:bold;'>
            Kembali</a>";
    }
?>
