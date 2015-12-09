<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $count = 0;
        $detail = ["name","email","title","content","posting time" ];

        $fp = fopen('msgbf.csv', 'r');
        
        while ($data = fgetcsv($fp)){ //read row by row
            $count++;

            if ($count === (int)($_GET['id'])){ //if the row number equals the id number echo this row

                foreach ($data as $value => $key) {
                    $key = str_replace("\r\n" ,"<br>" ,$key); //deal the line break problem
                    echo $detail[$value].":".$key."<br>";
                }

                break;
            }
        }
    ?>
    <a href="index.php">返回</a>
</body>
</html>