
<!DOCTYPE html>
 <?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        
        $json = json_decode(file_get_contents("data.json"), true);

        foreach ($json as $key => $value) {
            if($json[$key]['email'] === $_POST['email'] && $json[$key]['password'] === $_POST['password']){//if email and password you input is in data.json
                $_SESSION['username'] = $key;
                $_SESSION['email'] = $json[$key]['email'];

                header("Location: seeall.php");   
                break;

            }

        }

        echo "email or password error" ;
    ?>

    <a href="index.php">返回登入</a>
</body>
</html>
