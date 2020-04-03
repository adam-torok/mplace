<?php 
require_once("../../configuration/config.php");
require_once("../functions/functions.php");
session_start();
mysqli_report(MYSQLI_REPORT_ALL);
    if($_SERVER['REQUEST_METHOD'] == "POST"){
            $userPost = $_POST['post'];
            $date = getDateTimeNow();
            trim($userPost);
            $sql = "INSERT INTO posts (post_text,user_id,post_date) VALUES (?,?,?)";
            $stmt = $dbc -> stmt_init();            
            if ($stmt = $dbc->prepare($sql)) {
                $stmt->bind_param("sis",$userPost,$_SESSION['uId'],$date);
                $stmt->execute();
                }
                $stmt->close();
            }    
            if ($stmt === false) {
                return;
              }  
 ?>