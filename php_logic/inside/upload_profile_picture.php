<?php 
require_once("../../configuration/config.php");
session_start();

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $profileImageName = $_FILES['profile_image']['name'];
        echo $profileImageName;
        $profile_picture =  $_POST["profile_image"];
        $sql = "UPDATE users SET user_profile_puc = ? WHERE id = ?";
        $stmt = mysqli_stmt_init($dbc);
        mysqli_stmt_prepare($stmt,$sql);
        mysqli_stmt_bind_param($stmt,"si",$profileImageName,$_SESSION['uId']);
        mysqli_stmt_execute($stmt);
    }else{
        echo "lol";
        
    }
 ?>