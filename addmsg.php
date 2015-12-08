<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php 
        $fp = fopen('msgbf.csv', 'a+');

        $data[0]=$_POST['name'];
        $data[1]=$_POST['email'];
        $data[2]=$_POST['title'];
        $data[3]=$_POST['comments'];

        if ($data[0] === '' && $data[1] === '' && $data[2] === '' && $data[3] === ''){

            echo "please input something!!";

            ?><input type="button" value="返回" onclick="window.location.href='index.php'"><?php 

        }
        else {
            date_default_timezone_set('Asia/Taipei');   
            $date_time = date("Y-m-d H:i:s");

            $data[4] = $date_time;

            echo "add message successful"; 

            ?>
            <input type="button" value="確認" onclick="window.location.href='index.php'">
            <?php

            fputcsv($fp, $data);             
        }

        fclose($fp);
    ?>
</body>
</html>