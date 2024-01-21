<!DOCTYPE html>
<html>
<head>
<title>Empowering Farmer Registration</title>
<style>
  body {
    font-family: sans-serif;
  }
  form {
    width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
  label {
    display: block;
    margin-bottom: 5px;
  }
  input[type="text"], input[type="email"]{
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }
  textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
body {
  background-color: #f5f5f5;
}
form {
  background-color: #fff;
  border: 1px solid #999;
}
h1 {
  color: #333;
  font-size: 24px; 
  text-align: center;
  margin-bottom: 20px;
}
label {
  color: #555;
}
input[type="text"], input[type="email"], select, textarea {
  background-color: blanchedalmond;
}
input[type="text"]:focus, input[type="email"]:focus, select:focus, textarea:focus {
  border: 1px solid #333;
}

button {
  background:blueviolet;
  color: #fff;
}
input[type="password"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-bottom: 10px; ;
}
.color{
color: #555;

}

</style>
</head>
<body>

<h1>ADMIN REGISTRATION</h1>

<form id="comment-form" action="notice3.php"method="post">
  <label for="farmerID"> ID:</label>
  <input type="text" id="farmerID" name="farmerID" required>

  <label for="firstName">First Name:</label>
  <input type="text" id="firstName" name="firstName" required>

  <label for="lastName">Last Name:</label>
  <input type="text" id="lastName" name="lastName" required>

  <label for="sex">Sex:</label>
  <select id="sex" name="sex" required>
    <option value="">Select Sex</option>
    <option value="male">Male</option>
    <option value="female">Female</option>
  </select>
  <label for="dateOfBirth">Date of Birth:</label>
<input type="date" id="dateOfBirth" name="dateOfBirth" required>

  <label for="emailAddress">Email Address:</label>
  <input type="email" id="emailAddress" name="emailAddress" required>

  <label for="address">Address:</label>
  <textarea id="address" name="address" required></textarea>
  <label for="password">password:</label>
  <input type="password" name="password" placeholder="enter your password" class="color">
  <label for="password"> comfirm password:</label>
  <input type="password" name="password" placeholder="enter your password" class="color"><br><br>
  <button type="submit">Submit Registration</button>
</form>

</body>
</html>

