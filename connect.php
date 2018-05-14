<?php 
$username = "digitallync"; 
$password = "digitallync"; 
$hostname = "cloudaws.c3mzq4dz0888.us-west-2.rds.amazonaws.com:3306"; 
$dbname = "aws_weekend";

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) or die("Unable to connect to MySQL"); 
echo "Connected to MySQL using username - $username, password - $password, host - $hostname<br>"; 
$selected = mysql_select_db("$dbname",$dbhandle)   or die("Unable to connect to MySQL DB - check the database name and try again."); 
?>