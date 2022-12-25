<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Nice</title>
</head>

<body>

    <a href="<?php echo $_SERVER['PHP_SELF'] . '?destroy=true' ?>">Session destroy</a>
    <a href="<?php echo $_SERVER['PHP_SELF'] ?>">Start</a>
    <br>
    <br>


    <?php

    if (isset($_GET['destroy'])) {
        session_destroy();
        exit();
    }

    if (!isset($_SESSION['mysession'])) {
        $_SESSION['mysession'] = true;
        if (isset($_COOKIE['visit'])) {
            $visit = $_COOKIE['visit'] + 1;
        } else {
            $visit = 1;
        }
        setcookie('visit', $visit, time() + 3600 * 24 * 365);
        echo "<h1>Visit number: $visit </h1>";
    } else {
        echo "SESSION exists";
    }


    ?>
</body>

</html>