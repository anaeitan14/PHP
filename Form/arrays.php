<?php 
    if(isset($_GET['user'])) {
        $username = $_GET['user'];
    } else {
        echo "<h1>No username entered</h1>";
    }    

    $salaries = array('daniel'=>13000,
                    4321.312,
                    'nir'=>9900.00,
                    7000,
                    'noa'=>'Ten Thousand');
    
    /*foreach($salaries as $key=>$value) {
        echo "<h3>$key : $value</h3>";
    }*/

    if(array_key_exists('doron', $salaries)) {
        echo $salaries['doron'];
    } else {
        echo "<h1>Missing person</h1>";
    }

?>
