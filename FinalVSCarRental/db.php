<?php

$uname = "root";
$dbpass = "root";
$host = "localhost";
$db = "users";

$conn = mysqli_connect( "$host" , "$uname" , "$dbpass" , "$db" )  or die ("DB connection Error"); 

?>