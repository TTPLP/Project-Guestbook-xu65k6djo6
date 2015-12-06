<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>檢視文章</title>
</head>
<body>
    <?php 
        $detail=array("name","email","title","text");
        $fp = fopen('msgbf.csv', 'r');
        while ($data = fgetcsv($fp)) { 
            foreach ($data as $value=>$key) {
                echo $detail[$value].":".$key."<br>";
            } 
                 
        }    
        fclose($fp);
    ?>
    <input type="button" value="返回" onClick="this.form.action='msgbo.php';">
</body>
</html>