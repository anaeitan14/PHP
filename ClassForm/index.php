<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class form</title>
    <style>
        fieldset {
            width:200px;
            height:100px;
            background-color: lightblue;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
    </style>
</head>
<body>
    <form method="GET" action="secure.php">
        <fieldset>
            <input type="text" placeholder="Username" name="user" autofocus>
            <input type="password" placeholder="Password" name="password">
            <input type="submit">
        </fieldset>
    </form>
</body>
</html>