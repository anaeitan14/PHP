<?php
    $do_print = false;
    $points = 0;
    $turn = 0;
 
    if (!empty($_GET['answer'])) {
        if(isset($_GET['answer'])) {
            check_solution($_GET['result'], encrypt($_GET['answer']));
            $secret_num = encrypt(generate_calculation(true));
            $points = $_GET['score']+1;
            $turn = $_GET['turn']+1;
            if($turn == 5) {
                echo "You won";
                exit();
            }
        }
    } else {
       $secret_num = encrypt(generate_calculation(true));
       echo $secret_num;
       $points = 0;
       $turn = 0;
       $turn++;
    }


    function encrypt($query) {
        $first_encrypt = md5($query);
        $final_encrypt = sha1($first_encrypt);
        return $final_encrypt;
    }

    function generate_calculation($do_print) {
        $first_num = random_int(1,10);
        $second_num = random_int(1,10);
        $result = $first_num * $second_num;
        if($do_print) {
            echo "<h1> $first_num X $second_num =</h1>";
        }
        return $result;
    }

    function check_solution($first, $second) {
        if($first == $second) {
            echo "You were right";
        } else {
            echo "You were wrong";
        }
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
        #container {
            background-color: lightblue;
            width:250px;
            height:250px;
        }
    </style>
</head>
<body>
    <div id="container">    
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <input type="number" name="answer">
            <input type="submit" value="send">
            <input type="hidden" name="result" value="<?php echo $secret_num?>">
            <input type="hidden" name="score" value="<?php echo $points?>">
            <input type="hidden" name="turn" value="<?php echo $turn?>">
            <p><?php echo "Score:$points"?></p>
            <p><?php echo "Turn:$turn"?></p>
        </form>
    </div>
</body>
</html>