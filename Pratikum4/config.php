<?php

//  Server yang digunakkan
$server = "localhost";

// Username Server
$username = "root";

// Password Server
$password = "root";

// Database yang digunakan
$name_database = "db_crud_pweb2";

$sambung = mysqli_connect($server, $username, $password, $name_database);
if( !$sambung ){
    die("Ada masalah koneksi ke database: " .mysqli_connect_error());
}
?>