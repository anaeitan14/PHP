<!DOCTYPE html>
<html>

<head>
    <title>CRUD</title>
    <meta charset="UTF-8">
    <style>
        form {
            display: block;
            background-color: aqua;
            padding: 20px;
            width: 900px;
            margin: 10px;
        }
    </style>
</head>

<body>
    <form action="createDB.php" method="GET">
        <input type="text" name="db_name" placeholder="Database name" required>
        <input type="submit" value="Create DB">
    </form>

    <form action="createTable.php" method="GET">
        <input type="text" name="db_name" placeholder="Database name" required>
        <input type="text" name="table_name" placeholder="Table name" required>
        <input type="submit" value="Create table">
    </form>


    <form action="insertData.php" method="GET">
        <input type="text" name="db_name" placeholder="Database name" required>
        <input type="text" name="table_name" placeholder="Table name" required>
        <input type="text" name="full_name" placeholder="Student name" required>
        <input type="text" name="address" placeholder="Address" required>
        <input type="text" name="phone" placeholder="Phone number" required>
        <select name="major">
            <option value="software">Software</option>
            <option value="electronics">Electronics</option>
            <option value="arch">Architecture</option>
        </select>
        <input type="submit" value="Add student">
    </form>
</body>

</html>