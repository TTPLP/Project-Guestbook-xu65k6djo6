<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>cvs</title>
</head>
<body>
    <form action="msgbi.php" method="get">
        name <input type ="text" name="name"><br>
        email <input type ="text" name="email"><br>
        title <input type ="text" name="title"><br>
        text<TEXTAREA ROWS=10 COLS=40 NAME="comments"></TEXTAREA><br>
        <input type="submit" value="發文">
        <input type="button" value="檢視文章" onClick="this.form.action='seemsg.php';this.form.submit();"> 
</body>
</html>