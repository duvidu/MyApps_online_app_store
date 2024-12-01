<?php
require 'configer.php';

session_start(); 

if (isset($_POST['submit'])) {
    $cardHolder = $_POST["cardHolder"];
    $cardNumber = $_POST["cardNumber"];
    $month = $_POST["month"];
    $year = $_POST["year"];
    $cvv = $_POST["cvv"];
    $amount = $_POST["amount"];
    
    $sql = "INSERT INTO payments(cardHolder, cardNumber, month, year, cvv, amount) VALUES ('$cardHolder', $cardNumber, '$month', $year, $cvv, $amount)";

    if ($con->query($sql)) {
        $_SESSION['paymentID'] = $con->insert_id; 
        echo "Inserted value";
        
    } else {
        echo "Error: " . $con->error;
    }
}


// Read operation
if (isset($_SESSION['paymentID'])) {
    $paymentID = $_SESSION['paymentID'];
    $readSql = "SELECT * FROM payments WHERE payment_ID = $paymentID";
    $result = $con->query($readSql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<h2>Your Entered Details</h2>';
            echo "Card Holder: " . $row['cardHolder'] . "<br>";
            echo "Card Number: " . $row['cardNumber'] . "<br>";
            echo "Month: " . $row['month'] . "<br>";
            echo "Year: " . $row['year'] . "<br>";
            echo "CVV: " . $row['cvv'] . "<br>";
            echo "Amount: " . $row['amount'] . "<br><br>";
        }
    } else {
        echo "No records found.";
    }
}



// Delete operation
if (isset($_POST['delete'])) {
    if (isset($_SESSION['paymentID'])) {
        $paymentID = $_SESSION['paymentID'];
        $deleteSql = "DELETE FROM payments WHERE payment_ID = $paymentID";

        if ($con->query($deleteSql)) {
            echo "<script>alert('Deleted details');</script>";
            unset($_SESSION['paymentID']); // Remove the paymentID from the session
            header('Location: pay.php');
        } else {
            echo "Error: " . $con->error;
        }
    }
}

// Update operation
if (isset($_POST['update'])) {
    if (isset($_SESSION['paymentID'])) {
        $paymentID = $_SESSION['paymentID'];
        $cardHolder = $_POST["cardHolder"];
        $cardNumber = $_POST['cardNumber'];
        $month = $_POST["month"];
        $year = $_POST["year"];
        $cvv = $_POST["cvv"];
        $amount = $_POST["amount"];

        $updateSql = "UPDATE payments SET cardHolder='$cardHolder', cardNumber='$cardNumber', month='$month', year='$year', cvv='$cvv', amount='$amount' WHERE payment_ID = $paymentID";

        if ($con->query($updateSql)) {
            echo "Updated all queries.";
            header('Location: menu.php');
        } else {
            echo "Error: " . $con->error;
        }
    }
}
?>
<!DOCTYPE html>
<html>
<h2>Update Your Details:</h2>
        <form method="post" action="#">
            <label for="cardHolder">Card Holder Name:</label>
            <input type="text" name="cardHolder"><br>

            
            <label for="cardNumber">Card Number:</label>
            <input type="text" name="cardNumber"><br><br>

            <label for="month">Month:</label>
            <input type="text" name="month"><br><br>

            <label for="year">Year:</label>
            <input type="text" name="year"><br><br>

            <label for="cvv">CVV:</label>
            <input type="text" name="cvv" ><br><br>

            <label for="amount">Amount:</label>
            <input type="text" name="amount" ><br><br>

            <input type="submit" name="update" value="Update">
        </form>

        <h2>Delete Your Details:</h2>
        <form method="post" action="#">
            <input type="submit" name="delete" value="Delete">
        </form>
</html>
