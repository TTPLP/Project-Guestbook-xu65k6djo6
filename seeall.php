<!DOCTYPE html> 
<?php include 'init.php';?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>檢視文章</title>
</head>
<body>
    <?php
        if ($_SESSION['username'] != null){
            delmsgform();
            $detail = ["name","email","title","text"];

            $json = json_decode(file_get_contents("msgbf.json"), true);

            foreach ($json as $key => $value) {
                if( $value['name'] === $_SESSION['username']){
                    delcheckbox($key);
                }

                titlebtn($key,$value['title']);
                echo"<br>";   
            }
            
            deladdlogoutbtn();
        } else{
            echo "please login";
        }
    ?>
</body>
</html>