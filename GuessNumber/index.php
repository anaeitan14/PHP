<?php
$message = "";
if (!empty($_GET)) {
    if (isset($_GET['guess'], $_GET['number'], $_GET['count'])) {
        $guess = $_GET['guess'];
		$number = $_GET['number'];
        $count = $_GET['count']+1;
		if($guess>$number){
			$message="Too High";
		}
		else if($guess<$number){
			$message="Too Low";
		}
		else{
			$message="Correct";
		}
    }
} else {
    $number = random_int(1, 100);
    $count = 0;
}
?>

<!DOCTYPE html>
<HTML>

<head>
    <title>Guess Number</title>
    <style>
        form {
            width: 300px;
            padding: 20px;
            background: navy;
        }
    </style>
</head>

<body>
    <h3><?php 
            echo $message;
            if($message=="Correct"){
                echo "<br>It took you " . $count . " guesses";
                ?>
                    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
                    <input type="submit" value="Restart">
                    </form>
                <?php
                exit();
            }
            ?>
    </h3>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
        <input type="text" name="guess" autofocus>
        <input type="hidden" name="number" value="<?php echo $number; ?>">
        <input type="hidden" name="count" value="<?php echo $count;?>">
        <br>
        <input type="submit" value="Guess a number">
    </form>
</body>

</HTML>