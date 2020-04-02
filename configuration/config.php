<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "thoughtcloud";
//csatlakozás felépítése
$dbc = new mysqli($host, $dbusername, $dbpassword, $dbname);

if($dbc){
  $dbc -> set_charset("utf8mb4");
}
else{
  echo "Nem sikerült beállítani a karakter kódolást.";
}
?>
