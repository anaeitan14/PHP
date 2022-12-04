<?php
$colors = array("blue", "green", "purple", "orange", "gray");
$randomNumber = rand(0, count($colors) - 1);
$randomColor = $colors[$randomNumber];

$r = rand(0, 255);
$g = rand(0, 255);
$b = rand(0, 255);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: rgb(<?php echo "$r, $g, $b"; ?>);
        }
    </style>
</head>

<body>
    <?php
    echo $randomColor
        ?>
</body>

</html>