<?php include '_dbConnection.php'; ?>
<!DOCTYPE html>
<html .lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    try{
        
    
         //2)creating table users
       $sqluser = "CREATE TABLE USERS(
        id INT(10) AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(100) NOT NULL, 
        emailAddress VARCHAR(255) NOT NULL,
        pass VARCHAR(100) NOT NULL
        )";

        $connect->exec($sqluser);
        echo "Table USERS created successfully</br>";

        
         //3)creating table messages
         //Josh: I added the messagedate part so that we can 
         //show messages based off of when they were sent
         //I also changed the names
       $sqlmessage = "CREATE TABLE MESSAGES(
        id INT(10) AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(100) NOT NULL,
        messages VARCHAR(255) NOT NULL,
        messageDate datetime default NOT NULL
        )";

        $connect->exec($sqlmessage);
        echo "Table MESSAGES created successfully</br>";
 
       //create users
    } catch(PDOException $e){
       echo $sqluser . "<br>" . $e->getMessage();
    }
    ?>
   
   <?php
   $connect = null;
   ?>
    
</body>

</html>