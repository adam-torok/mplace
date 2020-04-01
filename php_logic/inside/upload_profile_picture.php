<?php 
require_once("../../configuration/config.php");
require_once("../functions/functions.php");
session_start();
mysqli_report(MYSQLI_REPORT_ALL);
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(file_exists($_FILES['profile_image']['tmp_name']) || is_uploaded_file($_FILES['profile_image']['tmp_name'])) { 
            $profileImageName = $_FILES['profile_image']['name'];
            $target = "../../storage/img/users/" . $profileImageName;
            $sql = "UPDATE users SET user_profile_puc = ? WHERE user_id = ?";
            $stmt = $dbc -> stmt_init();            
            if ($stmt = $dbc->prepare($sql)) {
                echo "inside second if";
                $stmt->bind_param("si",$profileImageName,$_SESSION['uId']);
                if(move_uploaded_file($_FILES['profile_image']['tmp_name'],$target)){
                    $stmt->execute();
                    $_SESSION['uPp'] = $profileImageName;
                }
                $stmt->close();
            }    
            if ($stmt === false) {
                return;
              }  
        }
    }
 ?>