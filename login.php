<?php
    if(!isset($_POST["btnLogin"])){
    ?>
        <form action="login.html" method="post">
            <input type="text" name="username" value="username">
            <input type="text" name="password" value="password">
            <input type="submit" name="btnLogin" value="Submit">
        </form>
    <?php
    } else {
        include '_dbConnection.php';

        try {
            $username = isset($_POST["username"]) ? $_POST["username"] : null;
            $password = isset($_POST["password"]) ? $_POST["password"] : null;

            $sql = "SELECT * FROM users WHERE username LIKE ? AND password LIKE ?";
            $stmt = $connect->prepare($sql);
            $stmt->execute([$username, $password]);
            
        $connect=null;
    }
    ?>