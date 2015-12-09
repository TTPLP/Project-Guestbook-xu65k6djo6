<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php 
        $fp = fopen('msgbf.csv', 'a+');

        if (trim($_POST['name']," ") === '' && 
            trim($_POST['email']," ") === '' && 
            trim($_POST['title']," ") === '' && 
            trim($_POST['comments']," ") === ''){//if nothing input

            echo "please input something!!";

            ?><a href="index.php">返回</a><?php 

        }
        else {                                          //if something input
            date_default_timezone_set('Asia/Taipei');   //get time
            $date_time = date("Y-m-d H:i:s");           

            echo "add message successful"; 

            ?>
            <a href="index.php">確認</a>
            <?php

            fputcsv($fp, [$_POST['name'],
                         $_POST['email'],
                         $_POST['title'],
                         $_POST['comments'],
                         $date_time]
                    );    //save data into msgbf.csv          
        }

        fclose($fp);
    ?>
</body>
</html>