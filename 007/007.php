<?php
$color = '';
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $color = '#3CB371';
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    header('Refresh: 1; http://localhost/php-homework/2022-05-24/007/007.php?');
    $color = '#FFFF66';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "./style007.css">
    <title>007</title>
</head>
<body style="background-color: <?php echo $color?>">
    <form action="" method="get">
        <button type="submit" class = "btnGet">GET</button>
    </form>

    <form action="" method="post">
        <button type="submit" class = "btnPost">POST</button>
    </form>
</body>
</html>