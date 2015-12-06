<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php 
        $fp = fopen('msgbf.csv', 'a+');
        $data[0]=$_GET['name'];
        $data[1]=$_GET['email'];
        $data[2]=$_GET['title'];
        $data[3]=$_GET['comments'];
         fputcsv($fp, $data);
         fclose($fp);
    ?>
</body>
</html>