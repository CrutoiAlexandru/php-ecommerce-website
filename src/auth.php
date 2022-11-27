<?php
$sql_servername = 'localhost';
$sql_username = 'root';
$sql_password = '';
$sql_dbname = 'ecommerce';

$conn = new mysqli($sql_servername, $sql_username, $sql_password, $sql_dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users WHERE username = '$_POST[username]' AND password = '$_POST[password]';";

$result = $conn->query($sql);

if ($result->num_rows == 1) {
    header('Location: /home');
} else {
    header('Location: /src/register.php');
}

$conn->close();
?>