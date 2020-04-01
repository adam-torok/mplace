<?php
session_start();
if(isset($_SESSION['id'])){
    $_SESSION = array();  
}
session_destroy();
header("Location: ../../php_main/out/index.php");
?>