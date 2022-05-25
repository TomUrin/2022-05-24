<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "./style001.css">
    <title>Spalvotas puslapis</title>
</head>
<body>
    <button type="submit" class = "btn">
        <a style = "text-decoration: none; padding: 17px 50px; color: black; font-size: 30px" href = "http://localhost/php-homework/2022-05-24/001/spalvotas.php">Black</a>
    </button>
    <button type="submit" class = "btn">
        <a style = "text-decoration: none; padding: 17px 50px; color: red; font-size: 30px" href = "http://localhost/php-homework/2022-05-24/001/spalvotas.php?color=1">Red</a>
    </button>
    <?php
    if($_GET["color"]) {
    ?>
    <body style = "background-color: red;">
    <?php
    }
    ?>
    <?php
    if($_GET["color"] == null) {
    ?>
    <body style = "background-color: black;">
    <?php
    }
    ?>
</body>
</html>