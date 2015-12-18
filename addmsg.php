<!DOCTYPE html>
 <?php include 'init.php';?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php 
        
        if ($_SESSION['username'] != null){

            $json = json_decode(file_get_contents("msgbf.json"), true);

            if (trim($_POST['title']) === '' && trim($_POST['comments']) === ''){//if nothing input

                echo "please input something!!";

                backtoseeall();

            } else {                                          //if something input
                                                   
                $date_time = date("Y-m-d H:i:s");           //get time
                $detail = array('name' => $_SESSION['username'],
                                'email' => $_SESSION['email'],
                                'title' => $_POST['title'],
                                'comments' => $_POST['comments'],
                                'posting time' => $date_time);

                $json[] = $detail;
                
                file_put_contents("msgbf.json", json_encode($json));
                echo "add message successful"; 

                comfirmseeall();        
       
            }

        } else {
            echo "please login";
            backtoindex();
        }
    ?>
</body>
</html>