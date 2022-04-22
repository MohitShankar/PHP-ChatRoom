
<?php
    if(!isset($_POST["btnLogin"])){
    ?>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <input type="text" name="username" value="username">
            <input type="text" name="password" value="password">
            <input type="submit" name="btnLogin" value="Submit">
        </form>
    <?php
    } else {
        include 'connectToDbPDO.php';

        try {
            $username = isset($_POST["username"]) ? $_POST["username"] : null;
            $password = isset($_POST["password"]) ? $_POST["password"] : null;

            $sql = "SELECT * FROM user WHERE username LIKE ? AND password LIKE ?";
            $stmt = $connect->prepare($sql);
            $stmt->execute([$username, $password]);

            foreach ($stmt->fetchAll() as $k => $row) {
                ?>
                <div style="border:1px solid #333; background-color:#fbd2d7; border-radius:5px; padding:16px;" align="center">
                    <h4><?php echo $row["firstname"]; ?></h4>
                    <h4><?php echo $row["lastname"]; ?></h4>
                    <h4><?php echo $row["username"]; ?></h4>
                    <h4><?php echo $row["password"]; ?></h4>
                    <h4><?php echo $row["email"]; ?></h4>   
                </div>
            <?php
            }
        } catch (PDOException $e) {
            echo $sql . "<br>" .$e->getMessage();
        }
        $connect=null;
    }
?>