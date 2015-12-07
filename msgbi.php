<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php 
        $detail=array("name","email","title","text");
        $fp = fopen('msgbf.csv', 'a+');
        $data[0]=$_GET['name'];
        $data[1]=$_GET['email'];
        $data[2]=$_GET['title'];
        $data[3]=$_GET['comments'];
        if ($data[0]==''&&$data[1]==''&&$data[2]==''&&$data[3]==''){
            echo "please input something!!";
            ?><input type="button" value="返回" onClick="history.back()"><?php 
        }
        else{
            foreach ($data as $value=>$key) {
                    echo $detail[$value].":".$key."<br>";
            } 
            ?><input type="button" value="返回" onClick="history.back()"><?php
             fputcsv($fp, $data);

             fclose($fp);
        }
    ?>
</body>
</html>