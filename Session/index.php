<?php session_start();
    $_SESSION['username1'] = "Okay";
    $_SESSION['username2'] = "Table";
    print_r($_SESSION);
    //unset($_SESSON['username1']);
    //$_SESSION = [];
?>


<h1>Session example</h1>
