<?php

if ($_SERVER['HTTP_REFERER'] == 'http://localhost/php-homework/2022-05-24/005/red.php') {
    header('Location: http://localhost/php-homework/2022-05-24/005/blue.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "./style005.css">
    <title>Spalvotas puslapis</title>
</head>
    <body style="background-color: #DC143C">
        <button class = "btn" style="background-color: #1E90FF">
            <a class="link" href = "http://localhost/php-homework/2022-05-24/005/red.php">Press me!</a>
        </button>
    </body>
</html>