<!DOCTYPE html> 
<?php include 'init.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>檢視文章</title>
</head>
<body>
    <form action="delmsg.php" method="get">
    <?php
        $json = json_decode(file_get_contents("msgbf.json"), true);

        foreach ($json as $key => $value) {
            if( $value['name'] === $_SESSION['username']){ ?>
                <input type="checkbox" name="del[]" value = "<?= $key?>">

    <?php   } ?>
            <a href="seemsg.php?id=<?=$key;?>"><?=$value;?></a><br> 

    <?php } ?>
    <input type="submit" value="刪除">
    <a href="writemsg.php">新增</a>
    <a href="logout.php">登出</a>
</body>
</html>