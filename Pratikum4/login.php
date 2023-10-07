<?php

include 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];

if(!empty($username) && !empty($password)){
    $query =  mysqli_query($koneksi, "select * from user where username='$username' and password='$password'");

    $result = mysqli_num_rows($query);

        if($result>0){
            header("localhost:./dashboard.php/form.php");
        } else{
            header("localhost:./form.php?app=gagal");
        }
} else{
    header("localhost:./form.php?app=error");
}