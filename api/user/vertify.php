<!DOCTYPE html>
<?php 
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
        if($_SESSION['registuser'] != null){
            $json = json_decode(file_get_contents("data.json"), true);
            
            $json[$_SESSION['registuser']]['password'] = $_SESSION['password'];
            $json[$_SESSION['registuser']]['email'] = $_SESSION['email'];
            file_put_contents("data.json", json_encode($json));
            
            echo "Successfully registered";
            
            unset($_SESSION['registuser']);
            unset($_SESSION['password']);
            unset($_SESSION['email']);

        }

    ?>
    <a href="index.php">返回登入</a>
</body>
</html>
