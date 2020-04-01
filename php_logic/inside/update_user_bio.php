<?php 
require_once("../../configuration/config.php");
require_once("../functions/functions.php");
session_start();
mysqli_report(MYSQLI_REPORT_ALL);
    if($_SERVER['REQUEST_METHOD'] == "POST"){
            $user_new_bio = $_POST['input'];
            trim($user_new_bio);
            $sql = "UPDATE users SET user_bio = ? WHERE user_id = ?";
            $stmt = $dbc -> stmt_init();            
            if ($stmt = $dbc->prepare($sql)) {
                $stmt->bind_param("si",$user_new_study,$_SESSION['uId']);
                $stmt->execute();
                $_SESSION['uBio'] = $user_new_bio;
                }
                $stmt->close();
            }    
            if ($stmt === false) {
                return;
              }  
 ?>