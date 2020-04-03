<?php
include_once("../../configuration/config.php");
require_once("../functions/functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(!empty($_POST['blogHeader']) && !empty($_POST['blogText']) && !empty($_POST['blogCat'])){
        $blog_header = $_POST['blogHeader'];
        $blog_text = $_POST['blogText'];
        $blog_category = $_POST['blogCat'];
        $user_id = $_SESSION['uId'];
        $date = getDateTimeNow();
        if(file_exists($_FILES['blogImg']['tmp_name']) || is_uploaded_file($_FILES['blogImg']['tmp_name'])) { 
            $blog_img = $_FILES['blogImg']['name'];
            $target = "../../storage/img/users/" . $blog_img;
            $sql = "INSERT INTO blogs (user_id, blog_header, blog_text, blog_category, blog_img, blog_date) VALUES (?,?,?,?,?,?)";
            $stmt = $dbc -> stmt_init();
            if($stmt -> prepare($sql)){
                $stmt -> bind_param("isssss",$user_id,$blog_header,$blog_text,$blog_category,$blog_img,$date);
                $stmt -> execute();
                $stmt->close();
            }
        }else{
            $sql = "INSERT INTO blogs (user_id, blog_header, blog_text, blog_category, blog_date) VALUES (?,?,?,?,?)";
            $stmt = $dbc -> stmt_init();
            if($stmt -> prepare($sql)){
                $stmt -> bind_param("issss",$user_id,$blog_header,$blog_text,$blog_category,$date);
                $stmt -> execute();
            }
            $stmt->close();
        }
      
    }
}

?>