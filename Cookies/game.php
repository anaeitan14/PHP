<?php
    $first_num = random_int(1,9);
    $second_num = random_int(1,9);
    $result = $first_num * $second_num;

    if (!empty($_GET)) {
        if(isset($_GET['answer'])) {
            if(encrypt($_GET['answer']) == $_COOKIE['result']) {
                echo "Correct";
                $score = $_COOKIE['score']+1;
                setcookie('score', $score);
            } else {
                $score = $_COOKIE['score'];
                setcookie('score', $score);
                echo "Wrong";
            }
            $turn = $_COOKIE['turn']+1;
            setcookie('turn', $turn);
            setcookie('result', encrypt(($result)));
        }
    } else {
        $turn = 1;
        $score = 0;
        $secret_num = encrypt($result);
        setcookie('result' ,$secret_num);
        setcookie('turn', $turn);
        setcookie('score', $score);
    }

    function encrypt($query) {
        $first_encrypt = md5($query);
        $final_encrypt = sha1($first_encrypt);
        return $final_encrypt;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication App</title>
    <style>
        html {
            background-color: lightblue;
        } 
        #calc {
            color:red;
        }

    </style>
</head>
<body>
    <?php
            if(isset($_COOKIE['turn']) && $_COOKIE['turn'] == 5) {
                    $score = round($score*100/$_COOKIE['turn']);
                ?>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
                    <h1>Your score is: <?php echo $score;?></h1>
                    <input type="submit" value="    Restart    ">
                    <?php   
                        setcookie('result' ,0);
                        setcookie('turn', 1);
                        setcookie('score', 0); ?>
                </form>
                <?php 
                exit(); 
            }?>
            
            <h2><?php echo "Points: $score <br> Turn: $turn"?></h2>
            <hr>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <h1 id="calc"><?php echo "$first_num X $second_num = "; ?></h1>
            <input type="number" name="answer">
            <br>
            <input type="submit" value="Send">
        </form>
</body>
</html>



