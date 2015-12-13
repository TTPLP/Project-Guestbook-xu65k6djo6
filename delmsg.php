<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        if ($_SESSION['username'] != null){
            $cout = 0;
            $num = 0;       
            $delval = $_GET['del']; //the row numbers which we want to delete
            $json = json_decode(file_get_contents("msgbf.json"), true);

            foreach ($json as $key => $value) {//read row by row

                if ( $delval[$cout] == $key ){

                    $cout ++;

                } else{

                    $line[$num] = $value;
                    $num ++;
                    
                }          
                
            }

            $json = $line;
            file_put_contents("msgbf.json", json_encode($json));
            
            echo "delete success!!!";
    ?>
            <a href="seeall.php">確認</a>
    <?php

        } else{
            echo "please login";
        }

    ?>
</body>
</html>