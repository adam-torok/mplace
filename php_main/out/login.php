<?php
include_once("../../configuration/config.php");
include_once("../../php_logic/functions/functions.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bejelentkezés</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../../css/output.css">
  </head>
  <body oncontextmenu="return false">
    <?php include_once("../../php_components/out/header_out.php");?>
    <div class="area-bg"></div>
    <?php include_once("../../php_components/forms/login_form_forms.php");?>
  </body>
  <script src="../../js/validate.js"></script>
  <script src="../../js/ajax/ajax.js"></script>

</html>
