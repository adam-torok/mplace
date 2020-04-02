<?php
require_once("../../configuration/config.php");
require_once("../../php_logic/functions/functions.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ThoughtCloud</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/output.css">
  </head>
  <body oncontextmenu="return false">
    <?php include_once("../../php_components/inside/header_inside.php");?>
    <?php include_once("../../php_components/inside/side_nav.php");?>
    <div class="flex max-w-full pt-20 p-5 justify-center">
    <?php include_once("../../php_components/inside/other_profile_inside.php");?>
    </div>
  </body>
  <script src="../../js/ajax/weather.js"></script>
  <script src="../../js/ajax/ajax.js"></script>
</html>
