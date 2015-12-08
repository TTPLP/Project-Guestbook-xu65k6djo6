<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php 
        $detail=array("name","email","title","text","time");
        $fp = fopen('msgbf.csv', 'a+');
        $data[0]=$_POST['name'];
        $data[1]=$_POST['email'];
        $data[2]=$_POST['title'];
        $data[3]=$_POST['comments'];
        if ($data[0]==''&&$data[1]==''&&$data[2]==''&&$data[3]==''){
            echo "please input something!!";
            ?><input type="button" value="返回" onClick="history.back()"><?php 
        }
        else{
            date_default_timezone_set('Asia/Taipei');   
            $date_time = date("Y-m-d H:i:s");
            $data[4]=$date_time;
            foreach ($data as $value=>$key) {
                    echo $detail[$value].":".$key."<br>";
            } 
            ?>
            <form action="index.php" method="get">
                <input type="submit" value="返回" >
            </form>
            <?php
             fputcsv($fp, $data);

             fclose($fp);
        }
    ?>
</body>
</html>