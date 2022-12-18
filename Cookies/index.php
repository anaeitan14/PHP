<?php
    if(!isset($_COOKIE['counter'])) {
        $count = 1;
    } else {
        $count = $_COOKIE['counter']+1;
    }

    if ($count >= 100000) {
        setcookie('counter', $count, time()-1000); //delete cookie, giving past time
        echo "Discount 30% code number:9911A30";
    } else {
        setcookie('counter', $count, time()+3600*24*365,null,null,null,true);
    }

    echo "Counter = " . $count;

?> 


