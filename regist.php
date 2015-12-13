<!DOCTYPE html>
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
    ?>
            <a href="signup.php">重新填寫</a>
    <?php
        }else{
            foreach ($json as $key => $value) {

                if ($key === $_POST['name']){

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

                $json[$_POST['name']]['password'] = $_POST['password'];
                $json[$_POST['name']]['email'] = $_POST['email'];
                file_put_contents("data.json", json_encode($json));
                echo "Successfully registered";

            } else{
    ?>
                    <a href="signup.php">重新填寫</a>
    <?php            
            }
        }
        
    ?>
    <a href="index.php">返回登入</a>
</body>
</html>