<?php 

// array
// variable that have more than 1 value
$day = ["Monday", "Tuesday", "Wednesday"];

// add new element in array
$day[] = "Thursday";

// show array
print_r($day); // mostly for debug
// or like below

//----------------------------
$number = [1,2,4,5];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- using for -->
    <?php for ($i=0; $i < count($number); $i++) { ?>
        <div><?= $number[$i]; ?></div>
    <?php } ?>

    <!-- using foreach -->
    <?php foreach ($number as $n) { ?>
        <?= $n; ?>
    <?php } ?>
</body>
</html>