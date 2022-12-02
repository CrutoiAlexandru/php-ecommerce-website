<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="/global/style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href='https://css.gg/shopping-cart.css' rel='stylesheet'>
</head>

<body>
    <div>
        <h2>
            <a href="/home">
                <span>
                    Pitshop
                </span>
            </a>
        </h2>
        <div>
            <a href="/aboutus">
                <h2>About us</h2>
            </a>
            <a href="/cart">
                <i class="gg-shopping-cart">
                </i>
            </a>
            <a href="/profile">
                <h2>Profile</h2>
            </a>
        </div>
    </div>

    <div style="width: 100vw; display:flex; justify-content: center;">
        <div class="line"></div>
    </div>

    <?php
    if (!array_key_exists('token', $_SESSION)) {
    ?>
    <div class="grid">
        <h1>In order to see what we have in store for you, please log in</h1>
    </div>
    <?php
        return;
    } ?>

    <div class="grid">
        <div class="grid-item">
            <img src="/share/img/socks/sock1.jpg" alt="sock1">
            <form method="get" action="/src/add_cart.php">
                <input type="submit" name="product" value="sock1"></input>
            </form>
        </div>

        <div class="grid-item">
            <img src="/share/img/socks/sock2.jpg" alt="sock2">
            <form method="get" action="/src/add_cart.php">
                <input type="submit" name="product" value="sock2"></input>
            </form>
        </div>

        <div class="grid-item">
            <img src="/share/img/socks/sock3.jpg" alt="sock3">
            <form method="get" action="/src/add_cart.php">
                <input type="submit" name="product" value="sock3"></input>
            </form>
        </div>
    </div>
</body>

</html>