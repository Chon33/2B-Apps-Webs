<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ejercicio3</title>
</head>

<body>
    <a href="http://localhost/formularios">Back</a> <br> <br>
    <?php
    session_start();
    $users = [
        "usuario",
        "daniel",
        "juan",
    ];

    $passwds = [
        "usuario123",
        "1234",
        "1234567890"
    ];

    $input_user = $_POST["user"];
    $input_passwd = $_POST["passwd"];

    $index = array_search($input_user, $users, true);

    if ($index !== false && $input_passwd == $passwds[$index]) {
        $_SESSION["username"] = $input_user;
        header("Location: portal.php");
    } else {
        header("Location: error.php");
    }

    ?>
</body>

</html>