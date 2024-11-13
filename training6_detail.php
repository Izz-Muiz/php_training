<?php
if (!isset($_GET["name"]) || !isset($_GET["age"]) || !isset($_GET["city"])) {
    header("Location: training6_getpost.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Students</h1>
        <ul>
            <li><img src="<?= $_GET["picture"]; ?>" alt=""></li>
            <li>Name : <?= $_GET["name"] ?></li>
            <li>Age : <?= $_GET["age"] ?></li>
            <li>City : <?= $_GET["city"] ?></li>
        </ul>
    <a href="training6_getpost.php">Back</a>
</body>
</html>
