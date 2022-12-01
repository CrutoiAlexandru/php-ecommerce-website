<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="/global/style.css">
</head>

<body>
    <?php
    if (!array_key_exists('token', $_SESSION)) {
        header('Location: /login');
        return;
    } ?>
    <a href="/src/out.php">
        <h1><span>LogOut</span></h1>
    </a>
</body>

</html>