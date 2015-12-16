<!DOCTYPE html> 
<?php include 'init.php';?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>檢視文章</title>
</head>
<body>
    <?php
        if ($_SESSION['username'] != null){
            delmsgform();
            $detail = ["name","email","title","text"];

            $json = json_decode(file_get_contents("msgbf.json"), true);

            foreach ($json as $key => $value) {
                if( $value['name'] === $_SESSION['username']){
                    delcheckbox($key);
                }
                titlebtn($key,$value['title']);

                echo"<br>";   
            }
    ?>

            <input type="submit" value="刪除">
            <a href="writemsg.php">新增</a>
            <a href="logout.php">登出</a>
    <?php 
        } else{
            echo "please login";
        }
    ?>
</body>
</html>