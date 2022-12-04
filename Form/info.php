<?php 
    //if(!empty($_GET['user']) and !empty($_GET['phone'])) {
    if(isset($_GET['user'], $_GET['phone'])) {
        $username = $_GET["user"];
        $phone = $_GET["phone"];
        echo "Hello $username";
        echo "Your phone number is $phone";
    } else {
        echo "Missing variables";
    }

?>