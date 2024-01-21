
<style>
    body {
  font-family: sans-serif;
  background-color: #14a179;
}

.container {
  width: 500px;
  margin: 0 auto;
  background-color: #0d4a57;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

h1, h2 {
  text-align: center;
  margin-bottom: 20px;
}

.form-group {
  margin-bottom: 15px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"], input[type="email"], input[type="tel"], input[type="number"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
}

button[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}
footer {
  background-color: #f2f2f2;
  padding: 40px 0;
  text-align: center;
}

.contain  {
  max-width: 960px;
  margin: 0 auto;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.footer-conten {
  flex: 1;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.links ul {
  list-style: none;
  padding: 0;
}

.links li {
  margin-bottom: 10px;
}

.links a {
  color: #333;
  text-decoration: none;
}

.social-media ul {
  display: flex;
  justify-content: space-between;
}

.social-media img {
  width: 30px;
}

.image-section img {
  width: 300px;
  height: 200px;
  object-fit: cover;
  border-radius: 10px;
  margin-bottom: 20px;
}

.copyright {
  margin-top:20px;
  font-size: 12px;
  color: #666;
  margin-right: 400px;
}
.social-media{
  display: flex;
}
.social-media ul {
  margin-left: 20px;
}
.social-media ul li{
  list-style: none;
  margin-right: 20px;
}
.social-media ul li a{
  font-size: 34px;
}

</style>
</head>
<body><hr>
<div class="container">
  <h1>Empowering Farmers of Maize</h1>
  <h2>Registration Form</h2>
  <form action="" method="post">
    <div class="form-group">
      <label for="firstname">First Name:</label>
      <input type="text" id="name" name="name" required>
    </div>
    <div class="form-group">
      <label for="lastname">Last Name:</label>
      <input type="text" id="latname" name="lastname" required>
    </div>
    <div class="form-group">
      <label for="nationality">ID(Indangamuntu):</label>
      <input type="number" id="nationality" name="nationality" required>
    </div>
    <div class="form-group">
      <label for="email">Email Address:</label>
      <input type="email" id="address" name="email" required>
    </div>
    <div class="form-group">
      <label for="phone">Phone Number:</label>
      <input type="tel" id="phone" name="phone" required>
    </div>
    <div class="form-group">
      <label for="location">Farm Location:</label>
      <input type="text" id="location" name="location" required>
    </div>
    <div class="form-group">
        <label for="location">Farmer District:</label>
        <input type="text" id="district" name="district" required>
      </div>
      <div class="form-group">
        <label for="location">Farmer sector:</label>
        <input type="text" id="sector" name="sector" required>
      </div>
    <div class="form-group">
      <label for="hectares">Maize Farm Size (hectares):</label>
      <input type="number" id="farmersize" name="hectares" required>
    </div>
    <div class="form-group">
        <label for="location">Fertilizer used:</label>
        <input type="text" id="fertilier" name="fertilier" required>
      </div>
      <div class="form-group">
        <label for="location">Types of Maize:</label>
        <input type="text" id="marize" name="maize" required>
      </div>
      Password:
      <div class="password">
             <input type="password" id="Password" name="password">
         </div>
         <div class="form-group">
        <label for="location">comfirm password:</label>
        <input type="password" id="Confirmpassword" name="password" required>
      </div>
      <button type="submit">Register</button>
      Already you have account? <a href="login.php">Login</a>
     
    </div>
    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </form>
</div><hr>
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
<?php

 include('connect.php');

 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $data = [
         $_POST['name'],
         $_POST['lastname'],
         $_POST['nationality'],
         $_POST['email'],
         $_POST['phone'],
         $_POST['location'],
         $_POST['district'],
         $_POST['sector'],
         $_POST['hectares'],
         $_POST['fertilier'],
         $_POST['maize'],
         $_POST['password'], 
     ];

     $sql = "INSERT INTO registration (firstname, lastname, ID, emailaddress, phonenumber, farmlocation, farmerdistrict, farmersector, farmsize, fertiliser, typesofmaize, pin) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
     $stmt = mysqli_prepare($conn, $sql);

     if ($stmt) {
         mysqli_stmt_bind_param($stmt, "ssssssssssss", ...$data);
         mysqli_stmt_execute($stmt);

         if (mysqli_stmt_affected_rows($stmt) > 0) {
          echo "<script>alert(\"Successfully registered\");</script>";
         } else {
             echo "Registration failed";
         }

         mysqli_stmt_close($stmt);
     } else {
         die("SQL error: " . mysqli_error($conn));
     }
 }

 mysqli_close($conn);
 ?>


</body>
</html>
