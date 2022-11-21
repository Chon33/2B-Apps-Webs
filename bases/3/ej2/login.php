<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Logged In</title>
</head>
<body>
    <?php
        $user = strtolower($_POST["user"]);
        $pass = $_POST["pass"];

        if ($user) {
            $conn = mysqli_connect("localhost", "root", "", "instituto");
            $sql = "SELECT username,passwd FROM credentials";
            $res = mysqli_query($conn, $sql);

            

            if ($res) {
                while ($fila = mysqli_fetch_assoc($res)) {
                    if ($user == $fila['username']) {
                        if (password_verify($pass, $fila['passwd'])) {
                            echo "<h1>Bienvenido @" . ucfirst($user) . "</h1>";
                        } else {
                            echo "<h1>Contraseña incorrecta!</h1>";
                        }
                    }
                }
            } else {
                print "<h1>Algo ha salido mal...</h1>";
            }

            mysqli_close($conn);
        } else {
            echo "<h3 class='error'>Necesitas un nombre de usuario</h3>";
        }
    ?>
</body>
</html>
