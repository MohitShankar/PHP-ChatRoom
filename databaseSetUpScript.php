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
        //1) dropping the table in case it exists
        $sql = "DROP TABLE IF EXISTS ITEMS";

        $connect->exec($sql);
        echo "ITEMS table dropped!</br>";
      
    
         //2)creating table users
       $sql = "CREATE TABLE USERS(
        id INT(10) AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        description VARCHAR(255) NOT NULL,
        image LONGBLOB NULL
        )";

        $connect->exec($sql);
        echo "Table ITEMS created successfully</br>";

        
         //3)creating table messages
         //Josh: I added the messagedate part so that we can 
         //show messages based off of when they were sent
       $sql = "CREATE TABLE MESSAGES(
        id INT(10) AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        description VARCHAR(255) NOT NULL,
        messageDate datetime default NOT NULL,
        image LONGBLOB NULL
        )";

        $connect->exec($sql);
        echo "Table ITEMS created successfully</br>";
 
       //create users
    } catch(PDOException $e){
       echo $sql . "<br>" . $e->getMessage();
    }
    ?>
   
   <?php
   $connect = null;
   ?>
    
</body>

</html>