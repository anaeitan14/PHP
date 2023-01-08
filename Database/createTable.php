<!DOCTYPE html>
<html>

<head>
    <title>Update table info </title>
</head>

<body>
    <?php
    include "db.php";

    if (isset($_GET['table_name'], $_GET['db_name'])) {
        $database_name = $_GET['db_name'];
        $table_name = $_GET['table_name'];

        $con = mysqli_connect(HOST, USER, PASS, $database_name)
            or die("Connection error" . mysqli_error($con));
        mysqli_set_charset($con, "utf8");

        $sql = "CREATE TABLE $table_name(
                id INT(10) AUTO_INCREMENT PRIMARY KEY,
                full_name VARCHAR(32) NOT NULL,
                address VARCHAR(32) NOT NULL,
                phone VARCHAR(32) NOT NULL,
                date TIMESTAMP)";

        if (mysqli_query($con, $sql)) {
            echo "<h1>Table $table_name created successfully</h1>";
        } else {
            echo "<h1>Table error: " . mysqli_error($con) . "</h1>";
        }
        mysqli_close($con);
    }

    header("refresh:3; url=index.php");
    exit();

    ?>

</body>

</html>