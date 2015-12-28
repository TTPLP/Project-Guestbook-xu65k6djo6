<?php 
    namespace messageboard;
    class init{
        session_start();
        if ($_SESSION['username'] == null){
            echo "please login";
?>
            <a href="index.php">返回登入</a>
<?php
            return 0;
        }
    }
?>