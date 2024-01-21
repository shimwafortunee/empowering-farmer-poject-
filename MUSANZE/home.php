<!DOCTYPE html>
<html>
<head>
    <title>online platform for crop shopping </title>
    <style>
        body {
            background-image: url('rr.jpg');
            background-size: cover;
            background-position: center; 
            background-color: #f3f3f3;
        }
        .image-row img {
            width: 30%; 
            height: 300px
        }
		.image-row {
    display: flex;
margin-top: 100px;
margin-left: 50px;

}

img {
    width: 30%;
    margin: 5px;
    cursor: pointer;
}

footer {
      background-color: #333;
      color: #fff;
      text-align: center;
      padding: 10px 0;
      position: dynamic;
      bottom: -10px;
      width: 100%;
    }
	
	body {
  margin: 0;
  font-family: Arial, sans-serif;
}

.loader {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 3px;
  background-color: #3498db;
  z-index: 9999;
}

header {
  background: blue;
  padding: 5px;
  text-align: center;
}

nav ul {
  list-style: none;
  padding: 10px;
}

nav ul li {
  display: inline block;
  margin-right: 10px;
  cursor: pointer;}
  
body.loading .loader {
  animation: loaderAnim 2s linear infinite;
}

@keyframes loaderAnim {
  0% {
    width: 0;
  }
  50% {
    width: 50%;
  }
  100% {
    width: 100%;
  }
}

a.me {
  text-decoration: none;
}
.link{
    position: absolute;
    top: 25;
    padding: 10px;
    color: rgb(226, 45, 45);
}
.link a:hover{
    color: rgb(24, 228, 228);
}
.session{
    position: absolute;
    left: 25;
    padding: 10px;
    color: black;
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
  margin-right: 400px;}
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
.about{
  position: fixed;
    height: 100px;
    width: 100px;
    color: rgb(226, 45, 45);
}
    </style>
    <script>
        function message(){
            confirm("continue with maize variety");}
            function message1(){
            confirm("continue with weather forecust");}
            function message2(){
            confirm("continue with plantation");}
            function message3(){
            confirm("continue with diseases");}
            function message4(){
            confirm("continue with germination stage");}
            function message5(){
            confirm("continue with fertiliser");}
            function message6(){
            confirm("continue with productivity");}
            function message7(){
            confirm("continue with market");}
            function message8(){
            confirm("continue with About us");
        }
    </script>
</head>
<body><center> 
 <div class="loader">
  <header>
     <h1>MAIZE CROP SHOPPING WITH ADVICE SHARING TO FAEMERS</h1>
     <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="agri about.pdf">About</a></li>
          <li><a href="admin.php">admin</a></li>
        </ul>
    </div>
	 
    
  </header>
   <br><br>
	<center>
	<div class="image-row"><a href="maize variety.php"><h3 class="link" onclick="message()">maize variety</h3></a>
        <img src="yellow-1.jpg" alt="Image1"><a href="weather.php"><h3 class="link" onclick="message1()">weather forecast</h3></a>
        <img src="smalll pict.jpg" alt="Image 2"><a href="plantation.php"><h3 class="link" onclick="message2()">Plantation</h3></a>
        <img src="whole page.webp" alt="Image 3">
    </div>
	</center>
	<center>
	<div class="image-row"><a href="disease.php"><h3 class="link" onclick="message3()">Disease</h3></a>
        <img src="maize disease.jpg" alt="Image 1"><a href="germination.php"><h3 class="link" onclick="message4()">Germination</h3></a>
        <img src="maize-farm.webp" alt="Image 2"><a href=""><h3 class="link" onclick="message5()">Fertilizer</h3></a>
        <img src="Maize-Plantation.jpg" alt="Image 3">
    </div>
	</center>
	<center>
	<div class="image-row"><a href=""><h3 class="link" onclick="message6()">Productivity</h3></a>
        <img src="Corncobs.jpg" alt="Image 1" onclick="selectImage(1)"><a href=""><h3 class="link" onclick="message7()">market</h3></a>
        <img src="QPM.jpg" alt="Image 1" onclick="selectImage(1)"><a href="login.php"><h3 class="link" onclick="message7()">about us</h3></a>
        <img src="selina.jpg" alt="Image 1" onclick="selectImage(1)">
      </div>
      
        <div><h3>Connect</h3>
        
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