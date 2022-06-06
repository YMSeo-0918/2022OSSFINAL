<?php
$host = "localhost";
$user = "testuser";
$pass = "your_password";
$db_name = "testdb";
$con = new mysqli($host, $user, $pass, $db_name);
function formatDate($date){
	return date('Y-m-d', strtotime($date));
}
?>