<?php
require_once("../../configuration/config.php");
require_once("../functions/functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $id = $_POST['id'];
    $sql = "DELETE FROM posts WHERE post_id = ?";
    $stmt = $dbc->stmt_init();
    if($stmt = $dbc -> prepare($sql)){
        $stmt -> bind_param("i",$id);
        $stmt -> execute();
        $stmt->close();
    }
}

?>