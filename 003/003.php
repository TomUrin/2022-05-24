<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

   $_SESSION['switch'] = $_POST['color'];

    header('Location: http://localhost/php-homework/2022-05-24/003/spalvotas003.php');
    die;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style003.css">
    <title>003</title>
</head>

<body style="background-color: <?php echo $_SESSION['switch']?>">
<?php
    ?>
    <form action="" method="post">
    <span>Spalvos kodas:</span> <input type="text" name="color">
    <button class="btn" type="submit">GO</button>
    </form>
</body>
</html>