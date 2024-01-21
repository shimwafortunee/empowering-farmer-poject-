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
$education = "";
$firstname = "";
$lastname = "";
$gender = "";
$dob = "";
$email = "";
$location = "";
$pin = "";
$errors=array();
$error="";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $education = mysqli_real_escape_string($conn, $_POST['farmerID']);
    $firstname = mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastName']);
    $gender = mysqli_real_escape_string($conn, $_POST['sex']);
    $dob = mysqli_real_escape_string($conn, $_POST['dateOfBirth']);
    $email = mysqli_real_escape_string($conn, $_POST['emailAddress']);
    $location = mysqli_real_escape_string($conn, $_POST['address']);
    $pin = mysqli_real_escape_string($conn, $_POST['password']);

    
    $sql = "INSERT INTO   VALUES (?, ?, ?, ?, ?,?,?,?)";
    $stmt = mysqli_prepare($conn,$sql);

    if (!$stmt) {
        die("SQL error: " . mysqli_error($conn));
    }
    else
    {
    mysqli_stmt_bind_param($stmt, "ssssssss", $education, $firstname, $lastname, $gender, $dob, $email, $location,$pin);
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