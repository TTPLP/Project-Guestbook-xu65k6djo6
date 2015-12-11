<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>檢視文章</title>
</head>
<body>
    <form action="delmsg.php" method="get">
        <?php 
            $number = 0;
            $detail = ["name","email","title","text"];

            $fp = fopen('msgbf.csv', 'r');

            while ($data = fgetcsv($fp)) { 
                $number++;

        ?>
                <input type="checkbox" name="del[]" value = "<?= $number?>">
                <a href="seemsg.php?id=<?=$number;?>"><?=$data[2];?></a>   
        <?php 

                echo"<br>";   
            }

            fclose($fp);
        ?>

        <input type="submit" value="刪除">
        <a href="writemsg.php">新增</a>
</body>
</html>