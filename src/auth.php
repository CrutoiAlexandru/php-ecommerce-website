<?php
session_start();

require 'connect.php';

# connect mysql db
$conn = db_connect();
# retrieve username and hashed password
$username = $_POST['username'];
$password = hash('sha256', $_POST['password']);

#check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

#select from users where user and password
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password';";
$result = $conn->query($sql);

# if user exists but password is wrong check!
# if user doesn't exist redirect to sign up
if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    # retrieve user unique token
    $_SESSION['token'] = $row['token'];
    # close db connection and redirect to /home
    $conn->close();
    header('Location: /home');
} else {
    # close db connection and rxedirect to /home
    $conn->close();
    echo '<script>
        alert("Wrong username or password");
        window.location.assign("/login");
    </script>';
}
?>