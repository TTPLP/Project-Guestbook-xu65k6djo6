<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php 
        $fp = fopen('msgbf.csv', 'a+');

        $data = array($_POST['name'],$_POST['email'],$_POST['title'],$_POST['comments'] );//put the value we get from the text into data array

        if ($data[0] === '' && $data[1] === '' && $data[2] === '' && $data[3] === ''){//if nothing input

            echo "please input something!!";

            ?><a href="index.php">返回</a><?php 

        }
        else {                                          //if something input
            date_default_timezone_set('Asia/Taipei');   //get time
            $date_time = date("Y-m-d H:i:s");           

            $data[4] = $date_time;

            echo "add message successful"; 

            ?>
            <a href="index.php">確認</a>
            <?php

            fputcsv($fp, $data);    //save data into msgbf.csv          
        }

        fclose($fp);
    ?>
</body>
</html>