<?php
require 'connect.php';

$conn = db_connect();
$username = $_POST['username'];
$password = hash('sha256', $_POST['password']);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password';";

$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $conn->close();
    header('Location: /home');
} else {
    $conn->close();
    header('Location: /register');
}
?>