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


$name = "";
$comment = "";
$phone = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$name = mysqli_real_escape_string($conn, $_POST['name']);
$comment = mysqli_real_escape_string($conn, $_POST['text']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);

$sql = "INSERT INTO notification(name,comment,phone)  VALUES(?,?,?)";
$stmt = mysqli_prepare($conn,$sql);

if (!$stmt) {
        die("SQL error: " . mysqli_error($conn));
    }
    else
    {
    mysqli_stmt_bind_param($stmt, "sss", $name, $comment, $phone);
    mysqli_stmt_execute($stmt);
    $result=mysqli_stmt_get_result($stmt);
    if (!$result) {
        header("Location: comment.php");
        
        exit();
    } else {
        
        $error="Something wrong try again!";
        exit();
    }
}
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
?>