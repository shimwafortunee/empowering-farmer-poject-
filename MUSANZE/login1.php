<?php
$error = "";

include('connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM registration WHERE emailaddress=? AND PIN=?";
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
<title>Login Form</title>
<style>
    body {
  font-family: sans-serif;
  background-color: #f0f0f5;
}

form {
  background-color: #fff;
  border: 2px solid #007bff;
  border-radius: 5px;
  padding: 30px;
  margin: 50px auto;
  width: 350px; /* Adjust width as needed */
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

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-bottom: 10px;
}

button {
  background-color: #007bff;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

</style>
<body>

<h1>Login</h1>

<form action="" method="post">
  <label for="email">Email:</label>
  <input type="email" name="username" required>

  <label for="password">password:</label>
  <input type="password" name="password" required>

  <button type="submit">Login</button>
</form>
&copy; 2023 maize farming
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<footer>
  <div class="contain">
    <div class="footer-conten">
      <div class="links">
        <h3>Connect</h3>
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="agri about.pdf">About</a></li>
        </ul>
      </div>
      <div class="social-media">
        <h3>Follow Us</h3>
        <ul>
          <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
          <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
          <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
        </ul>
      </div>
    </div>
    <div class="copyright">
      <p>&copy; 2024 Empowering Farmers of Maize. All rights reserved.</p>
    </div>
  </div>
</footer>
</center>
<footer>
  &copy; 2023 maize farming
</footer>

</body>
</html>
