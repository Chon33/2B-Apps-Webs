<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Account</title>
</head>

<body>
    <?php
        $name = ucfirst($_POST["name"]);
        $surn = ucfirst($_POST["surname"]);
        $age  = $_POST["age"];
        $user = strtolower($_POST["user"]);
        $old_user = strtolower($_POST["old_user"]);
        
        echo $name . "<br>";
        echo $surn . "<br>";
        echo $age  . "<br>";
        echo $user . "<br>";
        echo $old_user . "<br>";        

        $conn = mysqli_connect("localhost", "root", "", "instituto");
        $sql = "UPDATE portal
        SET real_name = '${name}', surname ='${surn}' , age = '${age}', username = '${user}'
        WHERE username='${old_user}'";

        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        if (mysqli_query($conn, $sql)) {
            mysqli_close($conn);
            header("Location: ". str_replace("edit.php", "", $actual_link));
            die();
        } else {
            mysqli_error($conn);
            mysqli_close($conn);
        }
    ?>
</body>
</html>