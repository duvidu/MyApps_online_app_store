<?php 
	session_start();
	require 'config.php';
	
?>
<?php 

	// check for form submission
	if (isset($_POST['submit'])) {

		$errors = array();

		// check if the username and password has been entered
		if (!isset($_POST['mail']) || strlen(trim($_POST['mail'])) < 1 ) {
			$errors[] = 'Username is Missing / Invalid';
		}

		if (!isset($_POST['psw']) || strlen(trim($_POST['psw'])) < 1 ) {
			$errors[] = 'Password is Missing / Invalid';
		}

		// check if there are any errors in the form
		if (empty($errors)) {
			// save username and password into variables
			$email 		= mysqli_real_escape_string($conn, $_POST['mail']);
			$password 	= mysqli_real_escape_string($conn, $_POST['psw']);
			

			// prepare database query
			$query = "SELECT * FROM user 
						WHERE Email = '{$email}' 
						AND Password = '{$password}' 
						LIMIT 1";

			$result_set = mysqli_query($conn, $query);

			if ($result_set) {
				// query succesful

				if (mysqli_num_rows($result_set) == 1) {
					
					$user = mysqli_fetch_assoc($result_set);
					// valid user found
					$_SESSION['user_id'] = $user['User_ID'];
                	$_SESSION['username'] = $user['Email'];
					// redirect to home.php
					echo "<script>alert('Login succesful');</script>"; 
					header('Location: menu.php');
				} else {
					// user name and password invalid
					$errors[] = 'Invalid Username / Password';
				}
			} else {
				$errors[] = 'Database query failed';
			}
		}
	}
	mysqli_close($conn);

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MyApps</title>
	<h2>MyApps</h2>
	<h3>Online App Store</h3>
	<link rel="stylesheet" href="styles\log.css">
	<script src ="js\log.js"></script>
	
	<style>
		pre.error {
		background: red;
		color: white;
		padding: 10px;
		}
		.social{
			margin-left: 30px;
			margin-right: 30px;
			width: 50px;
			height: auto;

		}
		.hr{
		border:1px solid white;
		width:100%;
	
		}
		
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
	
	<h1 style="text-align:center;">Login To The Online App Store</h1>

	<form action="log.php" method="post" onsubmit=" return checkPassword()">
		
		<?php 
			if (isset($errors) && !empty($errors)) {
				echo '<pre class="error">Invalid Username or Password</pre>';
			}
		?>
	
	
		<label for="mail">User Name</label><br>
		<input type="email" class="form1" id="mail" name="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\[a-z]{2,3}" placeholder="username@gmail.com" required><br><br>
		
		
		<label for="psw">Password</label><br>
		<input type="password" id="pws" name="psw" class="form1" onclick="enableButton()" required><br><br><br>
		
		<input type="submit" value = "Sing In" class="sub" name="submit" id = "submitBtn" disabled  ><br><br>
		
		<h5 style="text-align:left;">If You not Registered?  <a href="reg.php">Sign Up</a><h5>
		
		
		<hr class = "hr">
		<center>
			<h4>You can also Login with these:</h4>
            <div>
                <a href="https://www.facebook.com"><img class="social" src="images\facebook.png" alt="Facebook"></a>
                <a href="https://www.twitter.com"><img class="social" src="images\twitter.png" alt="Twitter"></a>
                <a href="https://www.google.com"><img class="social" src="images\google.png" alt="Google"></a>
            </div>
		</center>
	</form>
	
	
</body>
</html>

