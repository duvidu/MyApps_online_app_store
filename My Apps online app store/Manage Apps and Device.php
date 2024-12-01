

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
        <title>Manage Apps and Device</title>
        <link rel="stylesheet" href="styles/manageapps.css">
    </head>
    <body>
        <h1>Manage Apps and Device</h1>
        <hr>

        <div class="features">
            
            <a href="#" class="features-link">
                <img src="images/installedapps.png">
                <p>Installed Apps</p>
                <span><ion-icon name="chevron-forward-circle-outline"></ion-icon></span>
            </a>
            <a href="#" class="features-link">
                <img src="images/updates available.png">
                <p>Updates Available</p>
                <span><ion-icon name="chevron-forward-circle-outline"></ion-icon></span>
            </a>
            <a href="#" class="features-link">
                <img src="images/harmfullapps.jpg">
                <p>Identified Unsafe Apps</p>
                <span><ion-icon name="chevron-forward-circle-outline"></ion-icon></span>
            </a>
            <a href="#" class="features-link">
                <img src="images/storagespace.png">
                <p>Storage Space</p>
                <span><ion-icon name="chevron-forward-circle-outline"></ion-icon></span>
            </a>
            <a href="#" class="features-link">
                <img src="images/apppermission.jpg">
                <p>Manage App Permissions</p>
                <span><ion-icon name="chevron-forward-circle-outline"></ion-icon></span>
            </a>
        </div>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <!-- <iframe src="footer.html" frameborder="0" style="height: 200px; width: 100%;"></iframe> -->
        
         <?php include 'footer.html'; ?>
        
    </body>
</html>