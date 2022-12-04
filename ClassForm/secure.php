<?php
    $users = array("eitan"=>"1234",
                   "yossi"=>"5678",
                    "tal"=>"12345678");

    if(!empty($_GET['user']) && !empty($_GET['password'])) {
        $username = $_GET["user"];
        $password = $_GET["password"];
    } else {
        echo "<h1>Missing variables</h1>";
        header('Refresh:5; url=/www/ClassForm/index.php');
        exit();
    }

    if(!array_key_exists($username, $users)) {
           echo "<h1>User does not exist</h1>";
           header('Refresh:5; url=/www/ClassForm/index.php');
           exit();
    }

    if($users[$username] != $password) {
        echo "<h1>Unauthorized access</h1>";
        header('Refresh:5; url=/www/ClassForm/index.php');
        exit();
    }

    echo "<h1>Welcome $username <br> information $users[$username]</h1>";
