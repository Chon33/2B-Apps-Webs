<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3 Escribir, Leer y Borrar datos</title>
</head>

<script>
    <?php
        // imprimir codigo de mi github, por que CORS no permite importarlo
        $css = file_get_contents("https://raw.githubusercontent.com/Chon33/2B-Apps-Webs/main/bases/5/delete.js");
        echo $css;
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
    <div class="container">
        <form method="post">
            <h1>Register</h1>
            <h3>Nombre</h3>
            <input type="text" name="name"><br><br>
            <h3>Apellidos</h3>
            <input type="text" name="surname"><br><br>
            <h3>Edad</h3>
            <input type="text" name="age"><br><br>
            <h3>Usuario</h3>
            <input type="text" name="user"><br><br>
            <h3>Contraseña</h3>
            <input type="password" name="pass"><br><br>

            <div id="btns">
                <input formaction="register.php" type="submit" value="Register">
            </div>
        </form>
        <form method="post">
            <h1>Login</h1>
            <h3>Usuario</h3>
            <input type="text" name="user"><br><br>
            <h3>Contraseña</h3>
            <input type="password" name="pass"><br><br>

            <div id="btns">
                <input formaction="login.php" type="submit" value="Log in">
            </div>
        </form>

        <form method="post">
            <h1>Borrar Cuenta</h1>
            <h3>Usuario</h3>
            <input type="text" name="user"><br><br>
            <h3>Contraseña</h3>
            <input type="password" name="pass"><br><br>

            <div id="btns">
                <input onclick="f_borrar()" type="button" id="b_borrar" value="Borrar">
                <input class="hidden" formaction="delete.php" type="submit" id="yes" value="Si">
                <input class="hidden" onclick="f_no()" type="button" id="no" value="No">
            </div>
        </form>
    </div>
</body>

</html>