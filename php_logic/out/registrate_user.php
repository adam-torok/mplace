<?php 
include_once("../../configuration/config.php");
include_once("../functions/functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
  if(isset($_POST["user_first_name"]) && isset($_POST["user_last_name"]) && isset($_POST['user_password']) && isset($_POST['user_email']) && isset($_POST['user_city']) && isset($_POST['user_county'])){
    $userFirstName = sanitiseInput($dbc, $_POST["user_first_name"]);
    $userLastName = sanitiseInput($dbc,$_POST["user_last_name"]);
    $userPassword = sanitiseInput($dbc, $_POST['user_password']);
    $userEmail = sanitiseInput($dbc, $_POST['user_email']);
    $userCity = sanitiseInput($dbc, $_POST['user_city']);
    $userCounty = sanitiseInput($dbc, $_POST['user_county']);
    $userZip = sanitiseInput($dbc, $_POST['user_zip']);
  
    if(registrateUser($dbc,$userFirstName,$userLastName,$userPassword,$userEmail,$userCity,$userCounty,$userZip)){
      header("Location: ../../php_main/out/login.php");
    }
  }
}
?>
