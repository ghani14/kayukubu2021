<?php

//panggil conn database
include 'connect.php';
require 'header2.php';


$username = mysqli_escape_string($conn, $_POST['username']);
$password = mysqli_escape_string($conn, $_POST['password']);
$level = mysqli_escape_string($conn, $_POST['level']);

//cek username, terdaftar atau tidak
$cek_user = mysqli_query($conn, "SELECT * FROM login WHERE username = '$username' and level='$level' ");
$user_valid = mysqli_fetch_array($cek_user);
//uji jika username terdaftar
if ($user_valid) {
    //jika username terdaftar
    //cek password sesuai atau tidak
    if ($password == $user_valid['password']) {
        //jika password sesuai
        //buat session
        session_start();
        $_SESSION['username'] = $user_valid['username'];
        $_SESSION['level'] = $user_valid['level'];

        //uji level user
        if ($level == "admin") {
            header('location:index.php');
        } elseif ($level == "pengunjung") {
            header('location:home.php');
        
    } else {
        echo "<script>alert('Maaf, Login Gagal, Password anda tidak sesuai!');document.location='login.php'</script>";
    }
} else {
    echo "<script>alert('Maaf, Login Gagal, Username anda tidak terdaftar!');document.location='login.php'</script>";
}}
?>