<!DOCTYPE html>
 <?php include 'init.php';?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        unset($_SESSION['username']);
        header("Location: index.php");
    ?>
    
</body>
</html>