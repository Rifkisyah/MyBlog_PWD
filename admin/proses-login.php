<?php
    require_once('../model/Auth.php');
    $auth = new Auth();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = $_POST['email'];
        $password = $_POST['password'];

        if($auth->login($email, $password)){
            header("location: pages/dashboard-main.php");
        } else {
            echo "<script>alert('Login Gagal!');</script>";
            header("location: login.php");
        }
    } else {
        header("location: login.php");
    }
?>
