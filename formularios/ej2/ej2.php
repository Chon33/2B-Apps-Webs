<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Ejercicio2</title>
</head>

<body>
    <a href="http://localhost/formularios">Back</a> <br> <br>
    <?php
        $edad = $_POST['edad'];

        $edad > 17 ?
            print $_POST['nombre'] . " " . $_POST['apellidos'] . " es mayor de edad" :
            print $_POST['nombre'] . " " . $_POST['apellidos'] . " es menor de edad" 
    ?>
</body>

</html>