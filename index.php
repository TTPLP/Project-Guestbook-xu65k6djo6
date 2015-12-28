<!DOCTYPE html>
<?php  include_once __DIR__ . "/autoload.php"; 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
</head>
<body>
    <form action="login.php" method="post">
        email <input type ="text" name="email"><br>
        password <input type ="text" name="password"><br>
        <input type="submit" value="登入">
    <a href="signup.php">註冊</a>
</body>
</html>