<?php
require_once("../../configuration/config.php");
require_once("../functions/functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $user_id = $_SESSION['uId'];
    $event_name = $_POST['event_name'];
    $event_desc = $_POST['event_desc'];
    $event_date = $_POST['event_date'];
    $event_upload_date = getDateTimeNow();

    if(isset($_POST['event_type'])){
        $event_type = $_POST['event_type'];
    }else{
        $event_type = "0";
    }

    trim($event_name);
    trim($event_desc);

    if(file_exists($_FILES['event_pic']['tmp_name']) || is_uploaded_file($_FILES['event_pic']['tmp_name'])) { 
        $event_pic = $_FILES['event_pic']['name'];  
        $target = "../../storage/img/users/".$event_pic;
        $sql = "INSERT INTO events (user_id,event_name,event_desc,event_type,event_date,event_upload_date,event_pic) VALUES (?,?,?,?,?,?,?)";
        $stmt = $dbc -> stmt_init();          
        if(move_uploaded_file($_FILES['event_pic']['tmp_name'],$target)){  
        if ($stmt = $dbc->prepare($sql)) {
            $stmt->bind_param("issssss",$user_id,$event_name,$event_desc,$event_type,$event_date,$event_upload_date,$event_pic);
            $stmt->execute();
            $stmt->close();
            }
        }
    }
    else{
        $sql = "INSERT INTO events (user_id,event_name,event_desc,event_type,event_date,event_upload_date) VALUES (?,?,?,?,?,?)";
        $stmt = $dbc -> stmt_init();            
        if ($stmt = $dbc->prepare($sql)) {
            $stmt->bind_param("isssss",$user_id,$event_name,$event_desc,$event_type,$event_date,$event_upload_date);
            $stmt->execute();
            $stmt->close();   
        }
    }   
} 
    
?>