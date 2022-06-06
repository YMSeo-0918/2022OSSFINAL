<?php
$host = "localhost";
$user = "thankuser";
$pass = "your_password";
$db_name = "thankdb";
$con = new mysqli($host, $user, $pass, $db_name);
function formatDate($date){
	return date('Y-m-d', strtotime($date));
}
?>
