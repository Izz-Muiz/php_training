<?php
$students = ["Ali", 20, "IT"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <ul>
        <?php foreach  ($students as $student) { ?>
            <li><?= $student ?></li>
        <?php } ?>
    </ul>
</body>
</html>