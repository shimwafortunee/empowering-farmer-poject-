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
            } 
            else {
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
  <title>log</title>
  <style>
    body {
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
  background-color: red;}

button {
  background-color: #007bff;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

    body {
      background: url(maize\ variety.jpg)no-repeat center center/cover;
    }

    .max {
      text-align: center;
      color: white;
    }

    .social-media {
      display: flex;
    }

    .social-media ul {
      margin-left: 20px;
    }

    .social-media ul li {
      list-style: none;
      margin-right: 20px;
    }

    .social-media ul li a {
      font-size: 34px;
    }
    .open-button {
  background-color: #555;
  color: white;
  padding: 10px 15px;
  border: none;
  cursor: pointer;
  width: 100px;
}
.form-popup {
   display: none;
  border: 2px solid #f1f1f1;
  margin-left: 7.5em;
} 
  </style>
</head>
  <h1><b><u>login</u></b></h1>
  <form action="" method="post">
  <label for="email">Email:</label>
  <input type="email" name="email" placeholder="enter your email"> <br>
  <label for="password">password:</label>
  <input type="password" name="password" placeholder="enter your password"><br>
  <input type="submit" name="login" value="login"><br>
   you have no account? <a href="#myForm" class="open-button" onclick="openForm(event)">Register</a>

<div class="form-popup" id="myForm">
 <a href="farmer.php">farmer</a><br>
 <a href="registration.php">user</a><br>
 <a href="market.php">market</a><br>
 <br><a href="admin.php">Admin</a>
</div>
</div>
</form>
<script>
function openForm(click) {
  event.preventDefault(); // Prevent the default action of the link
  document.getElement(Form).style.display = "block";
}

</script>
  <p>Rwanda has a diverse range of maize varieties, each adapted to different
    ecological zones and farmer needs. Choosing the right variety is crucial for
    maximizing yield and profitability. Here's a breakdown of the main categories:</p>
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
<script>
function openForm() {
  document.getElementById('myForm').style.display = "block";
}

// function closeForm() {
//   document.getElementById("myForm").style.display = "none";
// }
</script>
    <div class="copyright">
      <p>&copy; 2024 Empowering Farmers of Maize. All rights reserved.</p>
    </div>
  </div>
</footer>
</center>
<footer>
  &copy; 2023 maize farming
</footer>

</html>