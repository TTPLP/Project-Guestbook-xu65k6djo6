<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $count=0;
        $flag=1;
        $delval=$_GET['del']; 
        $fp = fopen('msgbf.csv', 'r+');
        while ($data = fgetcsv($fp)) { 
            $count++;            
            foreach ($delval as $value=>$key) {
                if ($count==$key){
                    break;
                }

                else if($count!=$key&&$value==count($delval)-1){
                    $flag=0;
                }
            } 
            if($flag==0){
                $line[$cout]=$data;
                $cout++;
                $flag=1;
            }
            
        }
        $fp = fopen('msgbf.csv', 'w+');
        foreach ($line as $key => $value) {
            fseek($fp,0,SEEK_END);
            fputcsv($fp, $value);             
        }
        fclose($fp);
    ?>
    <form action="seeall.php" method="get">
        <input type="submit" value="返回" >
    </form>
</body>
</html>