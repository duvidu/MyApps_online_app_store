<?php
session_start();


if (!isset($_SESSION['user_id'])) {
    
    header('Location: log.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>User Profile</title>
        <link rel="stylesheet" href="styles/manageapps.css">
    </head>
    <body>
        <h1>Your Profile</h1>
        <hr>
        <div class="profile-container">
            <div class="profile">
                <img src="images/profile pic.png" class="profilepic">
                <div class="edit-profile">
                    <a href="updateprofile.php">
                    <ion-icon name="create-outline"></ion-icon>
                    <p>Edit Profile</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="features">
            <a href="Manage Apps and Device.php" class="features-link">
                <img src="images/manage apps.png">
                <p>Manage Apps and Device</p>
                <span><ion-icon name="chevron-forward-circle-outline"></ion-icon></span>
            </a>
            <a href="#" class="features-link">
                <img src="images/notification.png">
                <p>Notifications</p>
                <span><ion-icon name="chevron-forward-circle-outline"></ion-icon></span>
            </a>
            <a href="#" class="features-link">
                <img src="images/payments.png">
                <p>Payments</p>
                <span><ion-icon name="chevron-forward-circle-outline"></ion-icon></span>
            </a>
            <a href="#" class="features-link">
                <img src="images/security.png">
                <p>Security</p>
                <span><ion-icon name="chevron-forward-circle-outline"></ion-icon></span>
            </a>
            <a href="#" class="features-link">
                <img src="images/history.png">
                <p>App Purchase History</p>
                <span><ion-icon name="chevron-forward-circle-outline"></ion-icon></span>
            </a>
            <a href="settings.php" class="features-link">
                <img src="images/settings.png">
                <p>Settings</p>
                <span><ion-icon name="chevron-forward-circle-outline"></ion-icon></span>
            </a>
            <a href="feedback.html" class="features-link">
                <img src="images/help.png">
                <p>Help & Feedback</p>
                <span><ion-icon name="chevron-forward-circle-outline"></ion-icon></span>
            </a>
        </div>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <!-- <iframe src="footer.html" frameborder="0" style="height: 200px; width: 100%;"></iframe> -->
        
         <?php include 'footer.html'; ?>
        
    </body>
</html>