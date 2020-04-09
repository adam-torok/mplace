<?php
require_once("../../configuration/config.php");
require_once("../../php_logic/functions/functions.php");
isLogged();
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
    <div id="background" style="padding-top:3vw;margin-left:calc(20%);"class="flex justify-center flex-col items-center">
      <div class="bg-white">
      <?php include_once("../../php_components/inside/event_maker.php");?>
      <div style="display:grid;grid-template-columns:1fr 1fr 1fr;grid-gap:1vw;">
      <?php include_once("../../php_components/inside/event_wall.php");?>
      </div>
      </div>
      <script src="../../js/ajax/ajax.js"></script>
      <script src="../../js/ajax/weather.js"></script>
    </div>
  </body>
</html>
