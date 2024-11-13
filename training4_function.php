<?php
function hello($time = "Morning", $name = "Admin"){
    return "Good $time, $name";
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
    <h1><?= hello("Night", "Ali"); ?></h1>
</body>
</html>