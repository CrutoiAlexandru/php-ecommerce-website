<?php
session_start();
require 'connect.php';

function add($product)
{
    $conn = db_connect();
    $token = $_SESSION['token'];
    $sql = "SELECT id FROM users WHERE token = '$token';";

    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if (!$row)
        return;

    $id = $row['id'];
    $sql = "INSERT INTO cart (user_id, product) VALUES ($id, '$product') ON DUPLICATE KEY UPDATE product = concat(product, ',$product')";

    $conn->query($sql);
    $conn->close();
    header('Location: /home');
}

add($_GET['product']);
?>