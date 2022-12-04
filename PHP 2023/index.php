<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Website</title>
    <style>
        h1 {
            color: blue;
        }
    </style>
    </head>

<body>
    <h1>
        <?php echo "Hello PHP" . "<br></br>";
        echo date("l") . " " . date("d/m/Y") . " " . date("G:i:s"); ?>
    </h1>
    <?php
    $x = 7;
    $y = 11;
    echo "<hr>";
    echo $x + $y;
    if ($y > 10) {
        echo "<h2>Nice</h2>";
    }
    ?>
</body>

</html>