<?php
$username = "root";
$password = "";
$database = "myPhoneBook";

$mysqli = new mysqli("localhost", $username, $password, $database);
if(!$mysqli){
	die('could not find database'. mysqli_error($dbcon));
}
?>