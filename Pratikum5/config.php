<?php


$server  = "localhost";
$user = "root";
$password = "";
$database = "gibran";

$koneksi = mysqli_connect($server, $user, $password, $database);
if(!$koneksi){
    die("Anda masalah koneksi ke database: " .mysqli_connect_error());
}

