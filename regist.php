<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php

        $used = false;
        $json = json_decode(file_get_contents("data.json"), true);

        if (trim($_POST['name']) === '' || trim($_POST['email']) === '' || trim($_POST['password'] === '')){
            echo "please fill the form";
            echo'<a href="signup.php">重新填寫</a>';

        }else{
            if(array_key_exists($_POST['name'], $json) === true) {
        
                    echo "name has been used";
                    $used = true;

             } 
             foreach ($json as $key => $value) {
                 if(in_array($_POST['email'], $json[$key]) === true){
                    echo "email has been used";
                    $used = true;
                }
             }

            if ($used === false){
                $_SESSION['registuser'] = $_POST['name'];
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['password'] = $_POST['password'];

                include 'mail.php';

            } else{
                echo'<a href="signup.php">重新填寫</a>';         

            }

        }
        
    ?>
    <a href="index.php">返回登入</a>
</body>
</html>