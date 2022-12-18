<?php
    if(!isset($_COOKIE['counter'])) {
        $count = 1;
    } else {
        $count = $_COOKIE['counter']+1;
    }

    if ($count >= 10) {
        setcookie('counter', $count, time()-1000); //delete cookie, giving past time
    } else {
        setcookie('counter', $count, time()+3600*24*365);
    }

    echo "Counter = " . $count;

?> 


