<?php

require 'config.php';

session_start(); // Add this line to start the session

// Function to retrieve user details by email
function getUserByEmail($email)
{
    global $conn;

    $query = "SELECT * FROM user WHERE Email = '$email'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);

    return $user;
}

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $gender = $_POST['gender'];
    $mobileN = $_POST['mobile'];
    $email = $_POST['mail'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $password = $_POST['psw'];
    $rpassword = $_POST['rpsw'];

    // Check if the email already exists in the database
    $user = getUserByEmail($email);
    if ($user) {
        $error = "Email already exists. Please choose a different email address.";
        // Display the error message to the user
        echo '<script>alert("' . $error . '");</script>';
		
    } else {
        // Check if the password already exists in the database
        $query = "SELECT * FROM user WHERE Password = '$password'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            $error = "Password already exists. Please use a different Password.";
            // Display the error message to the user
            echo '<script>alert("' . $error . '");</script>';
        } else {
            $sql = "INSERT INTO user (Full_Name, Gender, Mobile_Number, Email, Address, DoB, Password)
                    VALUES ('$fname', '$gender', '$mobileN', '$email', '$address', '$dob', '$password')";

            if ($conn->query($sql)) {
                echo "<script>alert('Inserted successfully.');</script>";
            } else {
                echo "<script>alert('Failed to insert user.');</script>";
            }
        }
    }
}

// Update user information
if (isset($_POST['update'])) {
    $fname = $_POST['fname'];
    $gender = $_POST['gender'];
    $mobileN = $_POST['mobile'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $email = $_SESSION['email']; // Use the email from the session
	
	
	$query = "UPDATE user SET Full_Name='$fname', Gender='$gender', Mobile_Number='$mobileN', Address='$address', DoB='$dob' WHERE Email='$email'";
	if ($conn->query($query)) {
		header('Location: menu.php');
	} else {
		echo "<script>alert('Failed to update user details.');</script>";
	}
	
}

// Delete user account
if (isset($_POST['delete'])) {
    $email = $_SESSION['email']; // Use the email from the session

    $query = "DELETE FROM user WHERE Email='$email'";
    if ($conn->query($query)) {
        echo "<script>alert('User account deleted successfully.');</script>";
		header('Location: reg.php');
    } else {
        echo "<script>alert('Failed to delete user account.');</script>";
    }
}

function displayUserDetails($email)
{
    global $conn;

    $query = "SELECT * FROM user WHERE Email='$email'";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo "Full Name: " . $row['Full_Name'] . "<br>";
        echo "Gender: " . $row['Gender'] . "<br>";
        echo "Mobile Number: " . $row['Mobile_Number'] . "<br>";
        echo "Email: " . $row['Email'] . "<br>";
        echo "Address: " . $row['Address'] . "<br>";
        echo "Date of Birth: " . $row['DoB'] . "<br>";
    } else {
        echo "User details not found.";
    }
}

if (isset($_POST['submit'])) {

    
    // Set the email in session after successful sign-up
    $query = "SELECT * FROM user 
    WHERE Email = '{$email}'  
    LIMIT 1";

    $result_set = mysqli_query($conn, $query);

    if ($result_set) {
    // query succesful

        if (mysqli_num_rows($result_set) == 1) {

        $user = mysqli_fetch_assoc($result_set);
        
        $_SESSION['user_id'] = $user['User_ID'];
        $_SESSION['username'] = $user['Email'];
        }
    }
}

if (isset($_SESSION['username'])) {
    $email = $_SESSION['username'];

    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Sign-up Page</title>
		<style>
			body{
				background-color:#696969;
			}
			
			.sub{
				background-color:green;
				color: white;
				border-radius:5px;
				padding:10px 12px;
			}
		</style>
    </head>
    <body>
        <h1>You Can Update and Delete You Entered Details For Sign up</h1>
        <h2>You Entered Details:</h2>
        <?php
        displayUserDetails($email);
        ?>

        <h2>Update Your Details:</h2>
        <form method="post" action="">
            <label for="fname">Full Name:</label>
            <input type="text" name="fname" required><br>

            <label for="gender">Gender:</label>
            <input type="radio" name="gender" value="Male" required>Male
            <input type="radio" name="gender" value="Female" required>Female<br>

            <label for="mobile">Mobile Number:</label>
            <input type="text" name="mobile" required><br><br>

            <label for="address">Address:</label>
            <input type="text" name="address" required><br><br>

            <label for="dob">Date of Birth:</label>
            <input type="text" name="dob" placeholder="yyyy-mm-dd" required><br>

            <input type="submit" name="update" class="sub" value="Update">
        </form>

        <h2>Delete Your Account:</h2>
        <form method="post" action="">
            <input type="submit" name="delete" class="sub" value="Delete Account">
        </form>
		
		<br><h4 style="text-align:left;">If You not update or delete your account?  <a href="menu.php">Log In</a><h4>
		
    </body>
    </html>

    <?php
} else {
    // if the email is not set in the session
    echo "<script>alert('Error: Email not found in session.');</script>";
}

$conn->close();
?>
