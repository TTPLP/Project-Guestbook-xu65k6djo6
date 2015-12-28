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

        $used = false;

        if (trim($_POST['name']) === '' || trim($_POST['email']) === '' || trim($_POST['password'] === '')){
            echo "please fill the form";
            echo'<a href="signup.php">重新填寫</a>';

        }else{
            foreach ($json as $key => $value) {
                if ($key === $_POST['name']){   //if name you want to regist is in data.json
                    echo "name has been used";
                    $used = true;
                    break;

                } else if ($value['email'] === $_POST['email']){
                    echo "email has been used";
                    $used = true;
                    break;

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