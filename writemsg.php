<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>cvs</title>
</head>
<body>
    <form action="addmsg.php" method="post">
        name <input type ="text" name="name"><br>
        email <input type ="text" name="email"><br>
        title <input type ="text" name="title"><br>
        text<TEXTAREA ROWS=10 COLS=40 NAME="comments"></TEXTAREA><br>
        <input type="submit" value="發文">
    </form>
    <input type="button" value="取消" onclick="window.location.href='index.php'">
</body>
</html>