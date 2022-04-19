<?php 

$username = $_GET["username"];
$email = $_GET["email"];
$password = $_GET["password"];

$sql = "INSERT INTO USERS(username, emailAddress, pass) VALUES(".$username.",".$email.",".$password.")"

$mysqlhost = "localhost:3306";
$username = "root";
$password = "";
$myDB     = "chatroom2";
$charset = "utf8mb4";
$dsn = "mysql:host=$mySqlhost;dbname=$myDB;charset=$charset";
try{
   $connect = new PDO($dsn, $username, $password);

echo "Connected successfully</p>";
} catch (PDOException $e){
    echo "h1 class=\"text-danger\">Connectionn failed: </h1>" . "<p>" . $e->getMessage() . "</p>";
}


?>