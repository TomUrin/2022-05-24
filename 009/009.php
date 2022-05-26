<?php
$count = 0;
if(isset($_POST['submit'])){
    if(!empty($_POST['check'])) {
        foreach($_POST['check'] as $value){
            $count++;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "./style009.css">
    <title>009</title>
</head>
<body style="background-color: #000000">
<form action="" method="post">
        <ol type="A">
            <li><input type="checkbox" name="check[]"></li>
            <li><input type="checkbox" name="check[]"></li>
            <li><input type="checkbox" name="check[]"></li>
            <li><input type="checkbox" name="check[]"></li>
            <li><input type="checkbox" name="check[]"></li>
            <li><input type="checkbox" name="check[]"></li>
            <li><input type="checkbox" name="check[]"></li>
        </ol>
        <button type="submit" class = "btn" name="submit">SUBMIT</button>
        <p><?php echo $count ?></p>
    </form>
</body>
</html>