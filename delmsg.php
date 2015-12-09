<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $count = 0;
        $cout = 0;
        $num = 0;       
        $delval = $_GET['del']; //the row numbers which we want to delete
        $fp = fopen('msgbf.csv', 'r+');

        while ($data = fgetcsv($fp)) { //read row by row
            $count++;

            if ((int)($delval[$cout]) === $count){
                $cout++;

            } else{
                $line[$num] = $data;
                $num ++;
            }          
            
        }

        fclose($fp);

        $fp = fopen('msgbf.csv', 'w+');

        foreach ($line as $value) { //save the value of line array in msgbf.csv
            fseek($fp,0,SEEK_END);
            fputcsv($fp, $value);             
        }

        fclose($fp);
        
        echo "delete success!!!";
    ?>
    <a href="index.php">確認</a>
</body>
</html>