<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My APP</title>
	<h2>MY APP</h2>
	<h3>MyApps Online App Store</h3>
	<link rel="stylesheet" href="styles\register.css">
	<script src ="js\register.js"></script>
	<style>
		.set{
			margin-left: 1300px;
			margin-right: 10px;
			width: 30px;
			height: auto;
		}
	</style>
	
</head>
<body>
	
	<img class="logo" src ="images\logo.jpeg" alt ="App store" width="200" height="200" >
	
	<hr>
	<ul id="ul1" >
		<li id="li1"><a href="reg.php">Sign Up</a></li>
		<li id="li1"><a href="Log.php">Login</a></li>
		<li id="li1"><a href="contact.html">Contact</a></li>
		<li id="li1"><a href="about.php">About us</a></li>
	</ul>
	
	<h1 style="text-align:center;">Registration Form</h1>

	<form action="index.php" method="post" onsubmit=" return checkPassword()">
		<label for="fname">Full Name</label><br>
		<input type="text"  id="fname" name="fname" class="form1" placeholder="Full Name" required ><br><br>
		
		
		<label for="gender" name="Gender">Gender</label><br>
		<input type="radio" id="gender" name="gender" value="male">
		<label for="male"> Male </label>
		<input type="radio" id="gender" name="gender" value="female">
		<label for="female"> Female </label><br><br>
		
		<label for="mobile">Mobile Number</label><br>
		<input type="text" id="mobile" name="mobile" pattern="[0-9]{10}" placeholder="0771111111"><br><br>
		
		<label for="mail">Email Address</label><br>
		<input type="email" id="form2" id="mail" name="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\[a-z]{2,3}" placeholder="username@gmail.com"><br><br>
		
		<label for="address">Address</label><br>
		<textarea id="address" name="address" rows="5" cols="30"></textarea><br><br>
		
		<label for="dob">Enter your Date of Birth</label><br>
		<input type="text" id="dob" name="dob" placeholder="yyyy-mm-dd"><br><br><br>


		<label for="psw">Password</label><br>
		<input type="password" id="pws" name="psw" placeholder="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,10}" required ><br>
		<label for="rpsw">Re-enter Password</label><br>
		<input type="password" id="rpws" name="rpsw" placeholder="Re-enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,10}" required><br><br>
		
	
		
		<input type = "checkbox"  id="checkBox" onclick="enableButton()" >
		
		<label for="checkBox">Accept privacy policy and terms.</label><br><br>
		
		<input type="submit"  class="sub" id = "submitBtn" name = "submit" value = "Sign Up" disabled  ><br><br>
		
	</form>
	
	<footer>
	<hr>
	<center>
			<h4>You can also sign up with these:</h4>
            <div>
                <a href="https://www.facebook.com"><img class="social" src="images\facebook.png" alt="Facebook"></a>
                <a href="https://www.twitter.com"><img class="social" src="images\twitter.png" alt="Twitter"></a>
                <a href="https://www.google.com"><img class="social" src="images\google.png" alt="Google"></a>
            </div>
	</center>
</body>
</html>
