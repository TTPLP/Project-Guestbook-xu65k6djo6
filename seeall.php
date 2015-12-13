<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>檢視文章</title>
</head>
<body>
    <?php
        session_start();
        if ($_SESSION['username'] != null){
    ?>
            <form action="delmsg.php" method="get">
    <?php 
            $detail = ["name","email","title","text"];

            $json = json_decode(file_get_contents("msgbf.json"), true);

            foreach ($json as $key => $value) {
                if( $value['name'] === $_SESSION['username']){
    ?>
                    <input type="checkbox" name="del[]" value = "<?= $key?>">
    <?php
                }
    ?>
                <a href="seemsg.php?id=<?=$key;?>"><?=$value['title'];?></a>   
    <?php 

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