<?php session_start();
    function backtoseeall(){
?>      
        <a href = "seeall.php">返回</a>
<?php 
    }
      function comfirmseeall(){
?>      
        <a href = "seeall.php">確認</a>
<?php 
    }
    function backtoindex(){
?>
        <a href="index.php">返回登入</a>
<?php
    }
    function refill(){
?>
        <a href="signup.php">重新填寫</a>
<?php
    }
    function writemsgform(){
?>
        <form action="addmsg.php" method="post">
            title <input type ="text" name="title"><br>
            text<TEXTAREA ROWS=10 COLS=40 NAME="comments"></TEXTAREA><br>
            <input type="submit" value="發文">
        </form>
        <a href="seeall.php">取消</a>
<?php 
    }
    function titlebtn($key,$value){
?>
        <a href="seemsg.php?id=<?=$key;?>"><?=$value;?></a>   
<?php
    } 
    function delcheckbox($key){
?>
        <input type="checkbox" name="del[]" value = "<?= $key?>">
<?php
    }
    function delmsgform(){
?>
        <form action="delmsg.php" method="get">
<?php 
    }
    function deladdlogoutbtn(){
?>

        <input type="submit" value="刪除">
        <a href="writemsg.php">新增</a>
        <a href="logout.php">登出</a>
<?php 
    }
?>