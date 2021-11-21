<?php

$uname = "root";
$dbpass = "root";
$host = "localhost";
$db = "registration";

$conn = mysqli_connect( "$host" , "$uname" , "$dbpass" , "$db")  or die ("DB connection Error"); 

?>