<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register | ClothPalace | Home of Quality Clothing</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	 <!----------------------------- Navigation Bar -------------------->
 <div class="navbar">
   <div class="logo">
     <a href="index.php" target="_self"><img src="images/logo3.png" width="125px"></a>
   </div>
   <nav>
     <ul id="MenuItems">
       <li><a href="index.php">Home</a></li>
       <li><a href="collection.php">Collection</a></li>
       <li><a href="aboutus.php">About</a></li>
       <li><a href="contact.php">Contact</a></li>
       <li><a href="login.php">Account</a></li>
     </ul>
   </nav>
   <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
   <!-- when we click on the image, it will call the menutoggle() function which allows us to open and close the navigation menu when the screen is small -->
 </div>

 <!----------------------------- Register ------------------------------------->
	<div class="reg">
 		<h1>Create Account</h1>
 		<form action="register.php" method="POST">
 		    <select name="role" required>
		      <option value="" selected>Register as:</option>
		      <option value="Administrator">Administrator</option>
		      <option value="Client">Client</option>
		    </select>
		    <br><br>
			
			<input type="text" name="surname" id="surname" placeholder="Surname" required><br><br>
			<input type="text" name="firstname" id="firstname" placeholder="First Name" required><br><br>
			<input type="text" name="lastname" id="lastname" placeholder="Last Name" required><br><br>
			<input type="email" name="email" id="email" placeholder="Email"><br><br>

			<label for="phone">Enter your phone number:</label><br>
			<small>Format: 0720-000-000</small><br><br>
            <input type="tel" id="phone" name="phone" placeholder="0720-000-000" pattern="{0}[0-9][0-9][0-9]-[0-9][0-9][0-9]-[0-9][0-9][0-9]" required><br><br>

			<p>Select your gender:</p><br>
		    <label for="male">Male</label>
		    <input type="radio" id="male" name="gender" value="male">
		    <label for="female">Female</label>
		    <input type="radio" id="female" name="gender" value="female">
		    <label for="other">Other</label>
		    <input type="radio" id="other" name="gender" value="other">
		    <br><br>

			<input type="text" name="username" id="username" placeholder="Username" required><br><br>
			<input type="password" name="setpassword" id="setpassword" placeholder="Password" required><br><br>
			<input type="submit" name="register"  value="Create Account"><br><br><br>
 			<p>Already Have An Account? <a href="login.php" title="Log In">Log In</a></p>
            <br><br><br>
		</form>
  </div>

 <?php
 if(isset($_POST["register"])){
	$role=$_POST["role"];
	$surname=$_POST["surname"];
	$firstname=$_POST["firstname"];
	$lastname=$_POST["lastname"];
	$email=$_POST["email"];
	$phonenumber=$_POST["phone"];
	$gender=$_POST["gender"];
	$username=$_POST["username"];
	$password=$_POST["setpassword"];

	$sql="INSERT INTO myuser(user_id,role,surname,first_name,last_name,email,phone_number,gender,user_name,password)VALUES('','$role','$surname','$firstname','$lastname','$email','$phonenumber','$gender','$username','$password')";
    if(mysqli_query($conn,$sql)){
	   echo "Record Added Successfully!";
	   echo "<script>window.open('login.php','_self')</script>";
    }
    else{
	echo "Record Not Inserted!".mysqli_error($conn);
    }
 }
 ?>

 <!---------------------------- Footer ---------------------------->
 <div class="footer">
   <div class="container">
     <div class="row">
       <div class="footer-col-1">
          <h3>Our App Is Coming Soon!</h3>
          <p>The ClothPalace App will soon be available for download on Android and IOS devices from 1st August 2022.</p>
         <div class="app-logo">
            <a href="https://play.google.com/store/apps" target="_blank"><img src="images/play-store.png"></a>
            <a href="https://www.apple.com/ke/" target="_blank"><img src="images/app-store.png"></a>
         </div>
       </div>
       <div class="footer-col-2">
          <a href="index.php" target="_self"><img src="images/logo3.png"></a>
          <p>We provide a wide range of fabulous, quality clothing at affordable prices.</p>
       </div>
       <div class="footer-col-3">
         <h3>Useful Links:</h3>
         <ul>
           <li><a href="aboutus.php" target="_self">About Us</a></li>
           <li><a href="ourteam.php" target="_self">Our Team</a></li>
         </ul>
       </div>
       <div class="footer-col-4">
         <h3>Follow US:</h3>
         <ul>
           <li><a href="https://www.facebook.com/" target="_blank">Facebook</a></li>
           <li><a href="https://twitter.com/" target="_blank">Twitter</a></li>
           <li><a href="https://www.instagram.com/" target="_blank">Instagram</a></li>
           <li><a href="https://www.youtube.com/" target="_blank">YouTube</a></li>
         </ul>
       </div>
       <hr>
       <p class="copyright">Copyright 2022 - ClothPalace</p>
     </div>
   </div>
 </div>
</body>
</html>
