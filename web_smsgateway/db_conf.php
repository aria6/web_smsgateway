<?php
$host = "localhost"; //Server Database
$user = "admin"; //User Database
$pass = "admin"; //Pass Database
$db   = "gammu"; //Nama Database

mysql_connect($host,$user,$pass) or die (mysql_error());
mysql_select_db($db) or die (mysql_error());
?>
