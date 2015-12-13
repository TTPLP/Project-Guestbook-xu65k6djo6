<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        unset($_SESSION['username']);
        include 'index.php' ;
    ?>
    
</body>
</html>