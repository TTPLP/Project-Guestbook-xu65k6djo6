<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php 

        session_start();

        if ($_SESSION['username'] != null){

            $json = json_decode(file_get_contents("msgbf.json"), true);

            if (trim($_POST['title']) === '' && 
                trim($_POST['comments']) === ''){//if nothing input

                echo "please input something!!";

    ?>      
                <a href = "seeall.php">返回</a>
    <?php 

            } else {                                          //if something input
                
                date_default_timezone_set('Asia/Taipei');   //get time
                $date_time = date("Y-m-d H:i:s");

                $detail = array('name' => $_SESSION['username'],
                                'email' => $_SESSION['email'],
                                'title' => $_POST['title'],
                                'comments' => $_POST['comments'],
                                'posting time' => $date_time);

                $json[] = $detail;
                
                file_put_contents("msgbf.json", json_encode($json));
                echo "add message successful"; 

    ?>
                <a href = "seeall.php">確認</a>
    <?php               
       
            }

        } else {
            echo "please login";
        }
    ?>
</body>
</html>