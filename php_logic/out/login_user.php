<?php 
include_once("../../configuration/config.php");
include_once("../functions/functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
  if(isset($_POST["user_email"]) && isset($_POST["user_password"])){
    $userEmail = sanitiseInput($dbc, $_POST["user_email"]);
    $userPassword = sanitiseInput($dbc,$_POST["user_password"]);
    if(loginUser($dbc,$userEmail,$userPassword)){
        header("Location: ../../php_main/inside/homepage.php");
    }
  }
}
?>
