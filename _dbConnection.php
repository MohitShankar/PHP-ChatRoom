<?php 
$mySqlhost = "localhost:3306";
$username = "root";
$password = "";
$myDB     = "chatroom2";
$charset = "utf8mb4";
$dsn = "mysql:host=$mySqlhost;dbname=$myDB;charset=$charset";
echo $dsn;
try{
   $connect = new PDO($dsn, $username, $password);
//set the PDO error mode to exception
//$connect->setAttribute(PDO:ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected successfully</p>";
} catch (PDOException $e){
    echo "h1 class=\"text-danger\">Connectionn failed: </h1>" . "<p>" . $e->getMessage() . "</p>";
}
//i dont know what im doing