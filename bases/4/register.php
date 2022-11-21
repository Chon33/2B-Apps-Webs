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
        // Conectar a la base de datos
        $conn = mysqli_connect("localhost", "root", "", "instituto");

        // Guardar formilario en variables formateadas
        $name = ucfirst($_POST["name"]);
        $surn = ucfirst($_POST["surname"]);
        $age  = $_POST["age"];
        $user = strtolower($_POST["user"]);
        $pass = $_POST["pass"];
        $hash = password_hash($pass, PASSWORD_BCRYPT, ['cost' => 12]); // Encriptar contraseña para más seguridad

        // Pedir nombres de usuarios existentes de la base de datos
        $sql = "SELECT username FROM portal";
        $res = mysqli_query($conn, $sql);

        // Si se a ingresado un usuario
        if ($user) {
            $user_ok = true;

            // Mirar todos los nobres de la base de datos
            while ($fila = mysqli_fetch_assoc($res)) {
                if ($user == $fila['username']) { // Si el introducido coincide con el de la base de datos
                    $user_ok = false;
                    break; // Salir
                }
            }

            // Si el usuario no esta en la base de datos
            if ($user_ok) { 
                // Guardar las variables en la base de datos
                $sql = "INSERT INTO portal 
                (real_name, surname, age, username, passwd) VALUES
                ('${name}', '${surn}', '${age}', '${user}', '${hash}')";

                // Hacer peticion a la base de datos
                mysqli_query($conn, $sql) ?
                print "<h1>Registrado!</h1>" : // Si ok
                print "<h1>Algo ha salido mal...</h1>"; // si not ok
            } 
            // Si el usuario *esta* en la base de datos
            else {
                echo "<h3 class='error'>El nombre de usuario ya está en uso!</h3>";
            }

        } 
        // Si no se a ingresado un usuario 
        else {
            echo "<h3 class='error'>Necesitas un nombre de usuario!</h3>";
        }

        // Cerrar conexion con la base de datos
        mysqli_close($conn);
    ?>
</body>

</html>