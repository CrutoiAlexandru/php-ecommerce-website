<?php
function remove()
{
    $conn = db_connect();
    $token = $_SESSION['token'];
    $sql = "SELECT id FROM users WHERE token = '$token';";

    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if (!$row)
        return;

    $id = $row['id'];
    $sql = "DELETE FROM cart WHERE user_id = '$id'";

    $conn->query($sql);
    $conn->close();
}
?>