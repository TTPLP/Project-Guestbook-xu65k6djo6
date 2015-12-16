<!DOCTYPE html>
 <?php include 'init.php';?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>cvs</title>
</head>
<body>
    <?php
        
        if ($_SESSION['username'] != null){
            writemsgform();
        } else{
            echo "please login";
            backtoindex();
        }
    ?>
</body>
</html>