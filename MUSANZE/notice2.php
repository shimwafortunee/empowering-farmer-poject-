<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
$server = "localhost";
$users = "root";
$pass ="";
$db= "farm";
$conn = mysqli_connect($server, $users, $pass, $db);
if (!$conn) {
    die("Connection failed: ");
}
$id = "";
$name = "";
$address= "";
$gender = "";
$tel= "";
$password = "";
$errors=array();
$error="";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = mysqli_real_escape_string($conn, $_POST['farmerID']);
    $name = mysqli_real_escape_string($conn, $_POST['fullname']);
    $address = mysqli_real_escape_string($conn, $_POST['sector']);
    $gender= mysqli_real_escape_string($conn, $_POST['sex']);
    $tel = mysqli_real_escape_string($conn, $_POST['phone']);
    $password = mysqli_real_escape_string($conn, $_POST['pin']);
    
    
    $sql = "INSERT INTO market  VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn,$sql);

    if (!$stmt) {
        die("SQL error: " . mysqli_error($conn));
    }
    else
    {
    mysqli_stmt_bind_param($stmt, "ssssss", $id, $name, $address, $gender, $tel, $password);
    mysqli_stmt_execute($stmt);
    $result=mysqli_stmt_get_result($stmt);
    if (!$result) {
        header("Location: login.php");
        exit();
    } else {
        
        $error="Registiration failed";
        exit();
    }
}
    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>