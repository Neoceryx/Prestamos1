<?php

// Connection string parameters
$Server="localhost:3306";
$User="root";
$Pass="";
$DataBase="Prestamos1";

// Connection String
$Conn=mysql_connect($Server, $User, $Pass);

// Select DataBase. Handling errors
mysql_select_db($DataBase,$Conn);

// Handling errors
if ( mysql_select_db($DataBase,$Conn)==false ) {
  die(mysql_error());
}

// echo "On DataBase";

 ?>
