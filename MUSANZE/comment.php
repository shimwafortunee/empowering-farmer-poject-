
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
#comment-form {
  border: 1px solid #ccc;
  padding: 20px;
  margin-bottom: 20px;
}

#comment-form label {
  display: block;
  margin-bottom: 5px;
}

#comment-form input[type="text"],
#comment-form textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

#comment-form button {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}
#comment-form label {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
#comment-form input[type="tel"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

    </style>
</head>
<body>
    
<form  id="comment-form" action="notice.php"method="post">
  
  <label for="comment-author">Your Name:</label>
  <input type="text" id="comment-author" name="name" required>

  <label for="comment-text">Your Comment:</label>
  <textarea id="comment-text" name="text" required></textarea>
  <label for="phone">Phone Number:</label>
      <input type="tel" id="phone" name="phone" required>
      <br><br>
  <button type="submit">Submit Comment</button>
</form>

</body>
</html>
