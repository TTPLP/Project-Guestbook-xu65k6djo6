<?php 
        session_start();
        if ($_SESSION['username'] === null){
            echo'<a href="index.php">返回登入</a>';
            exit("please login");

        }
?>