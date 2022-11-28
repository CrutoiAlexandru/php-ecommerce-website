<?php
require 'connect.php';

$conn = db_connect();
$username = $_POST['username'];
$password = hash('sha256', $_POST['password']);
$email = $_POST['email'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users WHERE username = '$username';";

$result = $conn->query($sql);

if ($result->num_rows >= 1) {
    echo '<script>
        alert("User already exists");
        window.location.assign("/register");
    </script>';

    $conn->close();
} else {
    $insert = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email');";

    if ($conn->query($insert) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header('Location: /home');
}
?>