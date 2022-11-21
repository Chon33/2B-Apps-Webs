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

    <article>
        <h1>Welcome Back !</h1>
        <p class="centered">
            <?php
            session_start();
            print ucfirst($_SESSION["username"]);
            ?>
        </p>
    </article>
    
</body>
</html>