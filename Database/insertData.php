<!DOCTYPE html>
<html>

<head>
    <title>Update table info </title>
</head>

<body>
    <?php
    include "db.php";

    if (isset(
        $_GET['table_name'],
        $_GET['db_name'],
        $_GET['full_name'],
        $_GET['address'],
        $_GET['phone'],
        $_GET['major']
    )) {
        $database_name = $_GET['db_name'];
        $table_name = $_GET['table_name'];
        $full_name = $_GET['full_name'];
        $address = $_GET['address'];
        $phone = $_GET['phone'];
        $major = $_GET['major'];

        $con = mysqli_connect(HOST, USER, PASS, $database_name)
            or die("Connection error" . mysqli_error($con));
        mysqli_set_charset($con, "utf8");

        $sql = "INSERT INTO $table_name(id, full_name, address, phone, major,date)
        VALUES(null,'$full_name', '$address', '$phone', '$major',null);";

        if (mysqli_query($con, $sql)) {
            echo "<h1>User $table_name added successfully</h1>";
        } else {
            echo "<h1>User error: " . mysqli_error($con) . "</h1>";
        }
        mysqli_close($con);
    }

    header("refresh:3; url=index.php");
    exit();

    ?>

</body>

</html>