<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "mplace";
//csatlakozás felépítése
$dbc = new mysqli($host, $dbusername, $dbpassword, $dbname);

if($dbc){
  $dbc -> set_charset("utf8");
}
else{
  echo "Nem sikerült beállítani a karakter kódolást.";
}
?>
