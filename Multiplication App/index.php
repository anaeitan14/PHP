<?php
    $points = 0;
    $turn = 0;
    $first_num = random_int(1,9);
    $second_num = random_int(1,9);
    $result = $first_num * $second_num;

    if (!empty($_GET)) {
        if(isset($_GET['answer'])) {
            if(encrypt($_GET['answer']) == $_GET['result']) {
                echo "Correct";
                $points = $_GET['score']+1;
            } else {
                $points = $_GET['score'];
                echo "Wrong";
            }
            $turn = $_GET['turn']+1;
            $secret_num = encrypt(($result));
        }
    } else {
        $secret_num = encrypt($result);
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
            if(isset($_GET['turn']) && $_GET['turn'] == 5) {
                    $score = round($_GET['score']*100/$_GET['turn']);
                ?>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
                    <h1>Your score is: <?php echo $score;?></h1>
                    <input type="submit" value="    Restart    ">
                </form>
                <?php 
                exit(); 
            }?>
            
            <h2><?php echo "Points: $points<br> Turn:$turn"?></h2>
            <hr>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <h1 id="calc"><?php echo "$first_num X $second_num = "; ?></h1>
            <input type="number" name="answer">
            <br>
            <input type="submit" value="Send">
            <input type="hidden" name="result" value="<?php echo $secret_num;?>">
            <input type="hidden" name="turn" value="<?php echo $turn;?>">
            <input type="hidden" name="score" value="<?php echo $points;?>">
        </form>
    </div>
</body>
</html>