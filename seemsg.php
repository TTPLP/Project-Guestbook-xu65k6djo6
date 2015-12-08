<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $fp = fopen('msgbf.csv', 'r');
        while ($data=fgetcsv($fp)){
            $count++;
            if($count==$_GET['id']){
                foreach ($data as $value) {
                    echo $value."<br>";
                }
                break;
            }
        }
    ?>
</body>
</html>