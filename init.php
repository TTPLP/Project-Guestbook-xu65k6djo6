<?php 
        session_start();
        if ($_SESSION['username'] === null){
?>
            <a href="index.php">返回登入</a>
<?php
            exit("please login");
        }
?>