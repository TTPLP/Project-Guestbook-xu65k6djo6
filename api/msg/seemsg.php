<!DOCTYPE html>
 <?php include 'init.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $json = json_decode(file_get_contents("msgbf.json"), true);
        
        foreach ($json as $jkey => $jvalue) {
            if ($jkey == $_GET['id']){ //if the row number equals the id number echo this row
                foreach ($json[$jkey] as $value => $key) {
                    $key = str_replace("\r\n" ,"<br>" ,$key); //deal the line break problem
                    echo $value.":".$key."<br>";

                }
                break;
                
            }

        }

    ?>
    <a href = "seeall.php">返回</a>
</body>
</html>