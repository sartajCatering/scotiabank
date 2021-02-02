<?php
//first way to create DataConnection
define("HOST","localhost");
define("USER","root");
define("PWD","");
define("DB_NAME","scotiabank");

$con = mysqli_connect(HOST,USER,PWD) or die("Connection Failed...");
mysqli_select_db($con, DB_NAME) or die("DataBase Not Found...");


//Second way to create DataConnection
/* $con = mysqli_connect("localhost","root","") or die("Connection Failed...");
mysqli_select_db($con, "php2019") or die("DataBase Not Found...");
*/

?>