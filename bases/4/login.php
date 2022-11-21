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
        // Guardar las variables del form
        $user = strtolower($_POST["user"]);
        $pass = $_POST["pass"];

        // Si se ha introducido un usuario
        if ($user) {
            // Conectar a la base de datos
            $conn = mysqli_connect("localhost", "root", "", "instituto");

            // Pedimos info a la base de datos
            $sql = "SELECT * FROM portal";
            $res = mysqli_query($conn, $sql);

            // Si la base devuelve la informacion
            if ($res) {
                $user_ok = false;

                // Mirar en cada fila si el usuario coincide con el introducido
                while ($fila = mysqli_fetch_assoc($res)) {
                    // Si coincide...
                    if ($user == $fila['username']) {
                        $user_ok = true; // lo hemos encontrado

                        // ...entonces miramos la contraseña, para no hacerlo cada vez
                        if (password_verify($pass, $fila['passwd'])) {
                            // Si la contraseña es correcta...
                            echo "<h1>Bienvenido @" . ucfirst($user) . "</h1>";

                            // ...enseñamos la demas informacion
                            echo "
                            <form class='display'>
                                <h3>Nombre de Usuario</h3> <p>@" . ucfirst($fila['username']) ."</p> <br>  <br> 
                                <h3>Nombre</h3> <p>" . $fila['real_name'] ."</p> <br> <br>
                                <h3>Apellidos</h3> <p>" . $fila['surname'] ."</p> <br> <br>
                                <h3>Edad</h3> <p>" . $fila['age'] ."</p> <br> <br>
                            </form>
                            ";
                        } 
                        // Si la contraesña esta mal
                        else {
                            echo "<h1>Contraseña incorrecta!</h1>";
                        }

                        break; // no seguimos mirando más usuarios
                    }
                }

                // Si salimos del bucle sin que coincida ningun usuario
                if (!$user_ok) {
                    echo "<h1>No se ha encontrado el usuario!</h1>";
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
