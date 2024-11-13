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
        "city" => "Johor",
        "picture" => null
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
    <ul>
        <?php foreach ($students as $student) { ?>
            <a href="training6_detail.php?name=<?= $student["name"]; ?>&age=<?= $student["age"]; ?>&city=<?= $student["city"]; ?>&picture=<?= $student["picture"]; ?>"><li><?= $student["name"] ?></li></a>
        <?php }?>
    </ul>
</body>
</html>