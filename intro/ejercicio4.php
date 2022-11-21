<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Ejercicio4</title>
</head>

<body>
    <a href="http://localhost/intro">Back</a>
    
    <?php
        $res = json_decode(file_get_contents("https://api.emojisworld.fr/v1/random?limit=10"), true);

        print "<h1>Artículos</h1>";

        for($i = 0; $i<10; $i++) {
            print "
                <article>
                    <h2>Articulo #" . ($i+1) . "</h2>
                    <p>Random emoji: {$res['results'][$i]['emoji']}</p>
                </article>";
        }
    ?>
</body>

</html>