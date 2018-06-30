<?php
define('DB_SERVER','mydb.ctk0mf3cf8vd.ap-south-1.rds.amazonaws.com');
define('DB_USER','subhasis');
define('DB_PASS' ,'subhasis123');
define('DB_NAME', 'mydb');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

?>

