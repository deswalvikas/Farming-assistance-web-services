<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "web_service";

$conn = mysqli_connect($servername,$username,$password,$database);

if($conn)
{
	echo"";
}
else
{
	echo"Connection failed".mysqli_connect_error();
}

?>