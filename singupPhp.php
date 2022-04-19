<?php 

$chatUsername = $_GET["username"];
$email = $_GET["email"];
$chatPassword = $_GET["password"];
include "_dbConnection.php";

try{
    $sql = "INSERT INTO USERS(username, emailAddress, pass) VALUES(:user, :email, :pass)";
    $stmt = $connect -> prepare($sql);

    $stmt -> bindParam(":user", $chatUsername);
    $stmt -> bindParam(":email", $email);
    $stmt -> bindParam(":pass", $chatPassword);

    $stmt -> execute();

}catch(PDOException $e){
    echo $sql . "<br>" . $e -> getMessage();
}
$connect = null;
?>