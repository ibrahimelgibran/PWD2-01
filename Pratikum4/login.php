<?php

include './config.php';

$username = $_POST['username'];
$password = $_POST['password'];

if(!empty($username) && !empty($password)){
    $query =  mysqli_query($koneksi, "SELECT * FROM `tb_user` WHERE username='$username' AND password='$password'");
    $result = mysqli_num_rows($query);

        if($result>0){
            header("location: dashboard.php");
        } else{
            header("location: ./form.php?app=gagal");
        }
    } else {
        header("localtion: ./form.php?app=error");
    }