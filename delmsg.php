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
        $delval = $_GET['del']; //the row numbers which we want to delete

        $fp = fopen('msgbf.csv', 'r+');

        while ($data = fgetcsv($fp)) { //read row by row
            $count++;        

            foreach ($delval as $value => $key) {

                if ($count == $key){    //if it is the row that we want to delete
                    break;
                }

                else if ($count != $key && $value == count($delval)-1){ //else put the values of this row in line array
                    $line[$cout] = $data;
                    $cout++;
                }

            }            
            
        }

        $fp = fopen('msgbf.csv', 'w+');

        foreach ($line as $key => $value) { //save the value of line array in msgbf.csv
            fseek($fp,0,SEEK_END);
            fputcsv($fp, $value);             
        }

        fclose($fp);
        echo "delete success!!!";
    ?>
    <input type="button" value="確認" onclick="window.location.href='index.php'">
</body>
</html>