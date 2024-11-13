<?php 
$students = [
    [
        "name" => "Muiz",
        "age" => 20,
        "city" => "Terengganu",
        "picture" => "next.png"
    ],
    [
        "name" => "Muaz",
        "age" => 21,
        "city" => "Johor"
    ],
];
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
    <?php foreach ($students as $student) { ?>
        <ul>
            <li><img src="<?= $student["picture"]; ?>" alt=""></li>
            <li>Name : <?= $student["name"] ?></li>
            <li>Age : <?= $student["age"] ?></li>
            <li>City : <?= $student["city"] ?></li>
        </ul>
    <?php }?>
</body>
</html>