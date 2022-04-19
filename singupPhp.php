<?php 

$username = $_GET["username"];
$email = $_GET["email"];
$password = $_GET["password"];

$sql = "INSERT INTO USERS(username, emailAddress, pass) VALUES(".$username.",".$email.",".$password.")"

include "_dbConnection.php";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

?>