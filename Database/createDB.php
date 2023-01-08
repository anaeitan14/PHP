<!DOCTYPE html>
<html>

<head>
    <title>Update table info </title>
</head>

<body>
    <?php
    include "db.php";

    $con = mysqli_connect(HOST, USER, PASS);
    mysqli_set_charset($con, "utf8");


    if (isset($_GET['db_name'])) {
        $database_name = $_GET['db_name'];
        $sql = "CREATE DATABASE $database_name CHARACTER SET utf8";
        if (mysqli_query($con, $sql)) {
            echo "<h1>Database $database_name created successfully</h1>";
        } else {
            echo "<h1>Database error: " . mysqli_error($con) . "</h1>";
        }
        mysqli_close($con);
    }

    header("refresh:3; url=index.php");
    exit();


    ?>
</body>

</html>