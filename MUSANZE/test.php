<?php
$error = "";

include('connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM Registration WHERE emailaddress=? AND PIN=?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ss", $email, $password);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result) {
            $row = mysqli_fetch_row($result);
            if ($row >= 1) {
                header("location: log.php");
                exit();
            } else {
                echo "Invalid credentials. Please try again.";
            }
        } else {
            $error = "Query failed: " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
    } else {
        $error = "Statement preparation failed: " . mysqli_error($conn);
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
        body {
      background: url(maize\ variety.jpg)no-repeat center center/cover;
  font-family: sans-serif;
  background-color: #f0f0f5;
font-family: Arial, Helvetica, sans-serif;
}
* {box-sizing: border-box;}

form {
  background-color: #fff;
  border: 2px solid #007bff;
  border-radius: 5px;
  padding: 30px;
  margin: 50px auto;
  width: 350px;
}

h1 {
  text-align: center;
  margin-bottom: 20px;
  color: #333;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"]
{
  width: 100%;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
  margin-bottom: 10px
}
input[type="password"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 2px;
  box-sizing: border-box;
  margin-bottom: 10px;
}
.open-button {
  background-color: #555;
  color: white;
  padding: 10px 15px;
  border: none;
  cursor: pointer;
  position: fixed;
  width: 100px;}
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
}
.form-container .cancel {
  background-color: red;
}
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

button {
  background-color: #007bff;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
.open-button {
  background-color: #555;
  color: white;
  padding: 10px 15px;
  border: none;
  cursor: pointer;
  position: fixed;
  width: 100px;
}
.form-popup {
  
  position: fixed;
  border: 2px solid #f1f1f1;
  margin-left: 7.5em;
}
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

</style>
</head>
<body>
<form action="" method="post">
  <label for="email">Email:</label>
  <input type="email" name="email" placeholder="enter your email"> <br>
  <label for="password">password:</label>
  <input type="password" name="password" placeholder="enter your password"><br>
  <input type="submit" name="login" value="login"><br>
   you have no account? <button class="open-button" onclick="openForm()">register</button>
<button class="open-button" onclick="openForm()">register</button>

<div class="form-popup" id="myForm">
 <a href="farmer.php">farmer</a><br>
 <a href="registration.php">user</a><br>
 <a href="market.php">market</a><br>
 <a href="comment.php">notification</a>
 <br><a href=""></a>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}


</script>

</body>
</html>
