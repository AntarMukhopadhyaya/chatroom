<?php 
// These file will handle databse connection
$servername = "localhost";
$user = "root";
$password = "";
$db_name = "chatroom";
$conn = mysqli_connect($servername,$user,$password,$db_name);
if (!$conn) {
    //If the connection is not Sucessful
	header('location:index.php?sql=false');
	
}








?>