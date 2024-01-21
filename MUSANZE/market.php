<!DOCTYPE html>
<html>
<head>
<title>Market Registration</title>
<link rel="stylesheet" href="style.css">
<style>
body {
  background-color: #f0f0f5; 
  font-family: sans-serif;
}

form {
  background-color: blueviolet;
  border: 2px solid #007bff; 
  border-radius: 5px; 
  padding: 30px; 
  margin: 50px auto; 
  width: 500px;
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
input[type="password"],
select {
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
</head>
<body>

<h1>Market Registration Form</h1>

<form id="comment-form" action="notice2.php"method="post">
  <label for="marketid">Market ID:</label>
  <input type="text" id="marketID" name="marketID" required>

  <label for="name">Name of Seller:</label>
  <input type="text" id="fullname" name="fullname" required>
  <label for="location">location:</label>
  <input type="text" id="sector" name="sector" required>
  <label for="gender">Gender:</label>
  <select id="sex" name="sex" required>
    <option value="">Select Gender</option>
    <option value="male">Male</option>
    <option value="female">Female</option>
  </select>

  <label for="contact">Contact:</label>
  <input type="text" id="phone" name="phone" required>

  <label for="password">Password:</label>
  <input type="password" id="pin" name="pin" required>

  <label for="confirmpassword">Confirm Password:</label>
  <input type="password" id="pin" name="pin" required>

  <button type="submit">Register</button>
</form>

</body>
</html>
