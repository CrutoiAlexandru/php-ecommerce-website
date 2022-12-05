<?php
session_start();
require 'connect.php';
require 'remove_cart.php';
function order($country, $county, $city, $street, $number, $price)
{
    $conn = db_connect();
    $token = $_SESSION['token'];
    $sql = "SELECT id FROM users WHERE token = '$token';";

    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if (!$row)
        return;

    $id = $row['id'];

    $sql = "SELECT product FROM cart WHERE user_id = '$id';";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $product = $row['product'];
    $stage = 'Processing';

    $sql = "INSERT INTO orders (user_id, product, country, county, city, street, number, price, stage)
         VALUES ('$id', '$product', '$country', '$county', '$city', '$street', '$number', '$price', '$stage');";

    $conn->query($sql);
    $conn->close();
    echo '<script>
        alert("Order placed");
        window.location.assign("/home");
    </script>';
}

order($_GET['country'], $_GET['county'], $_GET['city'], $_GET['street'], $_GET['number'], $_GET['price']);
remove();
?>