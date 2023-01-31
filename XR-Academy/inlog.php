<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inlog</title>
</head>
<?php include_once 'config.php'?>
<body>
    <form action="" method="post">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="password">
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $statement = $connect->prepare($query);
        $statement->execute();
        $count = $statement->rowCount();
        if($count > 0){
            $_SESSION['username'] = $username;
            header("location: admin.php");
        }else{
            echo "username or password is incorrect";
        }
    }
    ?>
</body>
</html>