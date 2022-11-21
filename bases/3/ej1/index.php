<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Ejercicio1</title>
</head>

<body style="padding: 20px; height: 100%;">
    <a href="http://daniel.hp/bases">Back</a> <br> <br>
    <h1>Alumnos</h1>

    <?php
    $conexion = mysqli_connect("localhost", "root", "", "instituto");

    $consulta = "SELECT nombre,apellidos,edad,dni FROM alumnado";
    $resultado = mysqli_query($conexion, $consulta);

    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "
        <article>
            <h2>" . ucfirst($fila['nombre']) . " " . ucfirst($fila['apellidos']) . "</h2>
            <p>
                Edad: " . $fila['edad'] . " <br>
                DNI: " . $fila['dni'] . "
            </p>
        </article>
        ";
    }

    mysqli_close($conexion);
    ?>
</body>

</html>