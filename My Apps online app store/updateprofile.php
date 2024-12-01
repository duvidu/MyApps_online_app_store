<?php

    session_start();
    require 'config.php';
    
?>

<?php 

    //Assign session values into variables
    $userId = $_SESSION['user_id'];  
    $username = $_SESSION['username'];

    //Read data
    $sql = "SELECT * FROM user WHERE User_ID = '{$userId}' AND Email = '{$username}'";

    //Execute query
    $result = $conn->query($sql);

    if($result->num_rows > 0){

        while($row = $result->fetch_assoc()){
            //Assign read data
            $name = $row['Full_Name'];
            $gender = $row['Gender'];
            $mobileNumber = $row['Mobile_Number'];
            $email = $row['Email'];
            $address = $row['Address'];
            $dob = $row['DoB'];
            $password = $row['Password'];
        }

        //Display the read data
        echo '<center>';
        echo '<h1>Update Profile</h1>';
        echo '<form action="updateprofile.php" method="POST">';
        echo '<fieldset style="background-color:coral; margin-left: auto; margin-right: auto; width:50%">';
        echo '<label for="name">Name:</label><br>';
        echo '<input type="text" name="name" value="' . $name . '"><br><br>';
        echo '<label for="email">Email:</label><br>';
        echo '<input type="email" name="email" value="' . $email . '"><br><br>';
        echo '<label for="address">Address:</label><br>';
        echo '<input type="text" name="address" value="' . $address . '"><br><br>';
        echo '<label for="gender">Gender:</label><br>';
        echo '<select name="gender">';
        echo '<option value="Male" ' . ($gender == 'Male' ? 'selected' : '') . '>Male</option>';
        echo '<option value="Female" ' . ($gender == 'Female' ? 'selected' : '') . '>Female</option>';
        echo '</select><br><br>';
        echo '<label for="mobileNumber">Mobile Number:</label><br>';
        echo '<input type="text" name="mobileNumber" value="' . $mobileNumber . '"><br><br>';
        echo '<label for="dob">Date of Birth:</label><br>';
        echo '<input type="text" name="dob" value="' . $dob . '"><br><br>';
        echo '<label for="password">Password:</label><br>';
        echo '<input type="text" name="password" value="' . $password . '"<br><br><br>';
        echo '</fieldset>';
        echo '<input type="submit" name="update" value="Update" style="background-color:#00ff00;"> or ';
        echo '<input type="submit" name="delete" value="Delete Profile" style="background-color:red;">';
        echo '</form>';
        echo '</center>';
    }
    
    else {
        echo "No data found.";
    }
    

 /*Update Data*/


if (isset($_POST['update'])) {
    
    /*$userId = $_SESSION['user_id'];*/


    $name = $_POST['name'];
    $email =  $_POST['email'];
    $address = $_POST['address'];
    $gender =  $_POST['gender'];
    $mobileNumber = $_POST['mobileNumber'];
    $dob = $_POST['dob'];
    $password =  $_POST['password'];


    $sql2 = "UPDATE user SET
                Full_Name = '$name',
                Email = '$email',
                Address = '$address',
                Gender = '$gender',
                Mobile_Number = '$mobileNumber',
                DoB = '$dob',
                Password = '$password'
              WHERE Email = '$username'";

   
    if ($conn->query($sql2)) { 

        echo "<script>alert('Profile Updated Successfully');</script>";

        echo "<script>setTimeout(function() { window.location.href = 'userProfile.php'; }, 50);</script>";

        exit();

    } else {
        
        echo "Error updating profile: " . $conn->connect_error;
    }
}

if(isset($_POST['delete'])){
    $sql3 = "DELETE FROM user WHERE Email = '$username'";

    if($conn -> query($sql3)){
        echo "<script>alert('Your Profile has been Deleted!');</script>";

        echo "<script>setTimeout(function() { window.location.href = 'reg.php'; }, 50);</script>";

        exit();
    }
    
    else{
        echo "Error deleting profile ". $conn -> connect_error;
    }
}
//Close the connection object
mysqli_close($conn);

?>



