<?php 
function encrypt($origin) {
    $t1 = md5(random_int(1,999999));
    echo $t1 . "<br>";
    $finalCrypt = str_replace($t1[4],$origin,$t1);
    return $finalCrypt;
}

function decryption($d) {
    return $d[4];
}

$turn = 7;
$secretTurn = encrypt($turn);
echo $secretTurn . "<br>";

echo decryption($secretTurn);



?>