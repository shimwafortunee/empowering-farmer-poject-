<?php
include 'connect.php';  // Assuming this file contains the database connection

session_start();
$user_check = $_SESSION['login_user'];
$q = mysqli_query($conn, "SELECT firstname, lastname FROM registration WHERE emailaddress = '$user_check'");

if (!$q) {
    die("Query failed: " . mysqli_error($conn));
}

$row = mysqli_fetch_array($q, MYSQLI_ASSOC);

$login_session = $row['lastname'];

if (!isset($_SESSION['login_user'])) {
    header("location: login.php");
    exit();
}
?>