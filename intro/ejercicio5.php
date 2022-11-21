<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ejercicio5</title>
</head>

<body>
    <a href="http://localhost/intro">Back</a>
    <?php
        print "<h1>Tablas de Multiplicar</h1>";

        for ($i = 1; $i <= 10; $i++){
            print "<article>";
            print "<h2>Tabla del $i</h2>";
            for ($j = 1; $j <= 10; $j++) {
                print "$i x $j = " . $i*$j . "<br>";
            }
            print "<br>";
            print "</article>";
        }
    ?>
</body>

</html>