<?php
function db_connect()
{
    $sql_servername = 'localhost';
    $sql_username = 'root';
    $sql_password = '';
    $sql_dbname = 'ecommerce';

    return new mysqli($sql_servername, $sql_username, $sql_password, $sql_dbname);
}
?>