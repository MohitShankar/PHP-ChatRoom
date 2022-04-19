<?php 
$mySqlhost = "localhost:3306";
$username = "root";
$password = "";
//$myDB     = "chatroom2";
$charset = "utf8mb4";
$dsn = "mysql:host=$mySqlhost;charset=$charset";
try{
   $connect = new PDO($dsn, $username, $password);
//set the PDO error mode to exception
//$connect->setAttribute(PDO:ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected successfully</p>";
} catch (PDOException $e){
    echo "h1 class=\"text-danger\">Connectionn failed: </h1>" . "<p>" . $e->getMessage() . "</p>";
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    try {
        $dbName = 'chatroom2';
        //1) drop database in case it exists
        $sql = "DROP DATABASE IF EXISTS $dbName";

        $connect->exec($sql);
        echo "Database dropped sucessfully<br>";

        //1) create database
        $sql = "CREATE DATABASE $dbName";

        $connect->exec($sql);
        echo "Database created successfully<br>";
        } catch (PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
        ?>
        <?php
        $connect = null; 
        ?>
</body>

</html>