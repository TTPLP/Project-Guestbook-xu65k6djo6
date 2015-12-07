<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>檢視文章</title>
</head>
<body>
    <form action="delmsg.php" method="get">
        <?php 
            $detail=array("name","email","title","text");
            $fp = fopen('msgbf.csv', 'r');
            while ($data = fgetcsv($fp)) { 
                $number++;
                ?><input type="checkbox" name="del[]" value="<?= $number?>"><?php
                foreach ($data as $value=>$key) {
                    echo $detail[$value].":".$key."<br>";
                }              
                echo"<br>";   
            }
            fclose($fp);
        ?>
        <input type="submit" value="刪除">
    </form>
    <form action="msgbo.php" method="get">
        <input type="submit" value="返回" >
    </form>    
</body>
</html>