<?php

$dbname = "";
$dbuser = "";
$dbpass = "";
$host = "";



$connect = mysql_connect($host,$dbuser,$dbpass);


if (!$connect)
  echo "Couldn't connect!";
  
mysql_select_db($dbname, $connect);    
?>