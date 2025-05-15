<?php
session_start();
$host = "localhost";
$username = "root";
$password = "";
$database = "lpc_adventure";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function clean_input($data)
{
    global $conn;
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $conn->real_escape_string($data);
}

// Fungsi untuk memeriksa apakah user sudah login
function check_login()
{
    return isset($_SESSION['user_id']);
}

?>