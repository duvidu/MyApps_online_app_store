
<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page or any other appropriate action
    header('Location: log.php');
    exit;
}
?>
<?php require('config.php'); ?>
<?php

//catch data
     $Name = $_POST['nm'];
     $Message = $_POST['msg'];


//insert data
     $sql = "insert into category_feedback (Name,Message) values ('$Name','$Message')";

//check data inserted
     if ($conn -> query($sql))
        {
	  echo 'new record inserted';
	}
     else 
        {
	  echo 'error'.$sql."<br>".$conn = error;
        }

	 
?>
<?php mysqli_close ($conn); ?>