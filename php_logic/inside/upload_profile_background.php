<?php 
require_once("../../configuration/config.php");
require_once("../functions/functions.php");
session_start();
mysqli_report(MYSQLI_REPORT_ALL);
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(file_exists($_FILES['user_bg']['tmp_name']) || is_uploaded_file($_FILES['user_bg']['tmp_name'])) { 
            $profileBackroundName = $_FILES['user_bg']['name'];
            $target = "../../storage/img/users/" . $profileBackroundName;
            $sql = "UPDATE users SET user_bg_pic = ? WHERE user_id = ?";
            $stmt = $dbc -> stmt_init();            
            if ($stmt = $dbc->prepare($sql)) {
                $stmt->bind_param("si",$profileBackroundName,$_SESSION['uId']);
                if(move_uploaded_file($_FILES['user_bg']['tmp_name'],$target)){
                    $stmt->execute();
                    $_SESSION['uBgp'] = $profileBackroundName;
                }
                $stmt->close();
            }    
            if ($stmt === false) {
                return;
              }  
        }
    }
 ?>