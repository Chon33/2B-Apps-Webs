<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged In</title>
</head>

<script>
    <?php
        // imprimir codigo de mi github, por que CORS no permite importarlo
        $js = file_get_contents("https://raw.githubusercontent.com/Chon33/2B-Apps-Webs/main/bases/6/edit.js");
        echo $js;
    ?>
</script>

<style>
    <?php
        // imprimir codigo de mi github, por que CORS no permite importarlo
        $css = file_get_contents("https://raw.githubusercontent.com/Chon33/2B-Apps-Webs/main/bases/5/style.css");
        echo $css;
    ?>
</style>

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
                            <form class='display' method='post'>
                                <h3>Nombre de Usuario</h3> <p id='ps'>@" . ucfirst($fila['username']) . "</p> 
                                <input id='entrys' class='hidden' type='text' name='user' value='" . ucfirst($fila['username']) . "'>
                                <input class='hidden' type='text' name='old_user' value='" . ucfirst($fila['username']) . "'>
                                <br>  <br> 

                                <h3>Nombre</h3> <p id='ps'>" . $fila['real_name'] ."</p>
                                <input id='entrys' class='hidden' type='text' name='name' value='" . $fila['real_name'] . "'>
                                <br> <br>

                                <h3>Apellidos</h3> <p id='ps'>" . $fila['surname'] ."</p>
                                <input id='entrys' class='hidden' type='text' name='surname' value='" . $fila['surname'] . "'>
                                <br> <br>
                                
                                <h3>Edad</h3> <p id='ps'>" . $fila['age'] ."</p>
                                <input id='entrys' class='hidden' type='text' name='age' value='" . $fila['age'] . "'>
                                <br> <br>
                                
                                <div id='btns'>
                                    <input id='edit_btn' onclick='f_edit()' type='button' value='Edit'>
                                    <input id='ok_btn' class='hidden' formaction='edit.php' type='submit' value='Ok'>
                                    <input id='cancel_btn' onclick='f_cancel()' class='hidden' formaction='register.php' type='button' value='Cancel'>
                                </div>
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
