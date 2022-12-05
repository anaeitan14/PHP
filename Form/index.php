<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
    <style>
        fieldset {
            width:200px;
            height:100px;
            background-color: lightblue;
        }
    </style>
</head>
<body>
    <form method="GET" action="info.php">
        <fieldset>
            <legend>Username</legend>
            <input type="text" placeholder="Username" name="user" autofocus>
            <input type="tel" placeholder="Phone Number" name="phone">
            <input type="submit">
        </fieldset>
    </form>
</body>
</html>