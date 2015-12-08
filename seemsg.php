<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $count = 0;
        $detail = array("name","email","title","content","posting time" );

        $fp = fopen('msgbf.csv', 'r');

        while ($data = fgetcsv($fp)){ //read row by row
            $count++;

            if ($count === (int)($_GET['id'])){ //if the row number equals the id number echo this row

                foreach ($data as $value => $key) {
                    echo $detail[$value].":".$key."<br>";
                }

                break;
            }
        }
    ?>
    <input type="button" value="返回" onclick="window.location.href='index.php'">
</body>
</html>