<?php 
// Looping
// for
for ($i=0; $i < 5; $i++) { 
    echo "For" . "<br>";
}

// while
$a = 0;
while ($a < 5) {
    echo "While" . "<br>";
    $a++;
}

// do while
$b = 0;
do {
    echo "Do While" . "<br>";
    $b++;
} while ($b < 5);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i=1; $i <= 5; $i++) : ?>
            <tr>
                <?php for ($j=1; $j <= 5; $j++) : ?>
                    <td><?= "$i-$j" ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>