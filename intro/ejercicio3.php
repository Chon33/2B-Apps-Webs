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
    <a href="http://localhost/intro">Back</a>
    <?php
        print "<h1>Numeros Pares</h1>";

        for ($i = 1; $i <= 100; $i++) //Esto hace lo que este entre parentesis 100 veces
        {
            // $i va cambiando su valor cada vez que se ejecuta

            if($i % 2 == 0) { // % te devuelve el resto de una division,
                              // entonces si al dividir entre 2 el resto es 0, es par

                print "Par: " . $i; // aqui imprimes Par: y el valor de i en este vuelta


                print "<br>"; // esto imprime un salto de linea para que no se quede todo junto
            }
        }
    ?>
</body>
</html>