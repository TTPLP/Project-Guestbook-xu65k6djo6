<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php 
        $fp = fopen('msgbf.csv', 'w');
        $data[0]=$_GET['name'];
        $data[1]=$_GET['email'];
        $data[2]=$_GET['title'];
        $data[3]=$_GET['comments'];
        $cur_pos = ftell($fp);
        fseek($fp, $cur_pos+1);
         fputcsv($fp, $data);
         // fputcsv($fp, split(',', $_GET['email']));
         // fputcsv($fp, split(',', $_GET['title']));
         // fputcsv($fp, split(',', $_GET['comments'])); 
         fclose($fp);
    ?>
</body>
</html>