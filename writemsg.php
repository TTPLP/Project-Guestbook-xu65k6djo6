<!DOCTYPE html>
 <?php include 'init.php';?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>cvs</title>
</head>
<body>
    <form action="addmsg.php" method="post">
        title <input type ="text" name="title"><br>
        text<TEXTAREA ROWS=10 COLS=40 NAME="comments"></TEXTAREA><br>
        <input type="submit" value="發文">
    </form>
    <a href="seeall.php">取消</a>
</body>
</html>