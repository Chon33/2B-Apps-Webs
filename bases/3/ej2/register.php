<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Registrarse</title>
</head>

<body>
    <?php
        $conn = mysqli_connect("localhost", "root", "", "instituto");

        $user = strtolower($_POST["user"]);
        $pass = $_POST["pass"];
        $hash = password_hash($pass, PASSWORD_BCRYPT, ['cost' => 12]);

        $sql = "SELECT username FROM credentials";
        $res = mysqli_query($conn, $sql);

        if ($user) {
            $ok = true;

            while ($fila = mysqli_fetch_assoc($res)) {
                if ($user == $fila['username'])
                    $ok = false;
            }

            if ($ok) {
                $sql = "INSERT INTO credentials (username, passwd) VALUES ('${user}', '${hash}')";

                mysqli_query($conn, $sql) ?
                print "<h1>Registrado!</h1>" :
                print "<h1>Algo ha salido mal...</h1>";
            } else {
                echo "<h3 class='error'>El nombre de usuario ya está en uso!</h3>";
            }

        } else {
            echo "<h3 class='error'>Necesitas un nombre de usuario!</h3>";
        }

        mysqli_close($conn);
    ?>
</body>

</html>