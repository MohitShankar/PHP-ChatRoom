<?php 

$username = $_GET["username"];
$email = $_GET["email"];
$password = $_GET["password"];

$sql = "INSERT INTO USERS(username, emailAddress, pass) VALUES(".$username.",".$email.",".$password.")"

include "_dbConnection.php";


?>