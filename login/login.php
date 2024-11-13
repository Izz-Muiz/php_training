<?php
if (isset($_POST["submit"])) {
    if ($_POST["name"] == "admin" && $_POST["password"] == "123") {
        header("Location: admin.php"); exit;
    } else {
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php if (isset($error)) { ?>
        <p>Invalid</p>
    <?php } ?>
    <form action="" method="post">
        <li>
            <label for="name">Username : </label>
            <input type="text" name="name" id="name">
        </li>
        <li>
            <label for="password">Password : </label>
            <input type="password" name="password" id="password">
        </li>
        <li>
            <button type="submit" name="submit">Submit</button>
        </li>
    </form>
</body>
</html>