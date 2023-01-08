<!DOCTYPE html>
<html>

<head>
    <title>Update table info </title>
</head>

<body>
    <?php
    define("HOST", "localhost");
    define("USER", "root");
    define("PASS", "");
    define("DATABASE", "db2023");

    $con = mysqli_connect(HOST, USER, PASS, DATABASE);
    mysqli_set_charset($con, "utf8");

    $sql = "SELECT * FROM users";
    $res = mysqli_query($con, $sql);

    echo "<table>
                <tr>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Time</th>
                </tr>";

    while ($row = mysqli_fetch_array($res)) {
        echo "<tr>
                <td>$row[1]</td>
                <td>$row[2]</td>
                <td>$row[3]</td>
            </tr>";
    }

    echo "</table>";



    mysqli_close($con);
    ?>
</body>

</html>