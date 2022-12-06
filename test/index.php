<?php
$conn = new mysqli('localhost', 'root', '', 'ecommerce');

$sql = "SELECT MAX(price) FROM products WHERE name LIKE 'b%';";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
$max_price = $row['MAX(price)'];

$conn->close();

echo $max_price;
?>