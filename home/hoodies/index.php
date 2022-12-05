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

    <?php
    require '../../src/connect.php';
    $conn = db_connect();
    ?>

    <div class="grid">
        <?php
        $sql = "SELECT * FROM products WHERE name = 'hoodie1'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        ?>

        <div class="grid-item">
            <img src="<?php echo $row['image'] ?>" alt="<?php echo $row['name'] ?>">
            <?php
            echo $row['description'];
            echo "\n";
            echo "\$" . $row['price'];
            ?>
            <form method="get" action="/src/add_cart.php">
                <input type="hidden" name="product" value="<?php echo $row['name'] ?>"></input>
                <input type="submit" value="Buy"></input>
            </form>
        </div>

        <?php
        $sql = "SELECT * FROM products WHERE name = 'hoodie2'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        ?>

        <div class="grid-item">
            <img src="<?php echo $row['image'] ?>" alt="<?php echo $row['name'] ?>">
            <?php
            echo $row['description'];
            echo "\n";
            echo "\$" . $row['price'];
            ?>
            <form method="get" action="/src/add_cart.php">
                <input type="hidden" name="product" value="<?php echo $row['name'] ?>"></input>
                <input type="submit" value="Buy"></input>
            </form>
        </div>

        <?php
        $sql = "SELECT * FROM products WHERE name = 'hoodie3'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        ?>

        <div class="grid-item">
            <img src="<?php echo $row['image'] ?>" alt="<?php echo $row['name'] ?>">
            <?php
            echo $row['description'];
            echo "\n";
            echo "\$" . $row['price'];
            ?>
            <form method="get" action="/src/add_cart.php">
                <input type="hidden" name="product" value="<?php echo $row['name'] ?>"></input>
                <input type="submit" value="Buy"></input>
            </form>
        </div>
    </div>
    <?php $conn->close() ?>
</body>

</html>