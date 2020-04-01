<?php 
require_once("../../configuration/config.php");
require_once("../functions/functions.php");
session_start();
mysqli_report(MYSQLI_REPORT_ALL);
    if($_SERVER['REQUEST_METHOD'] == "POST"){
            $user_new_wp = $_POST['input'];
            trim($user_new_wp);
            $sql = "UPDATE users SET user_work_place = ? WHERE user_id = ?";
            $stmt = $dbc -> stmt_init();            
            if ($stmt = $dbc->prepare($sql)) {
                $stmt->bind_param("si",$user_new_study,$_SESSION['uId']);
                $stmt->execute();
                $_SESSION['uWp'] = $user_new_wp;
                }
                $stmt->close();
            }    
            if ($stmt === false) {
                return;
              }  
 ?>