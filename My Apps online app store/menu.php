<?php 

    session_start();

    if (!isset($_SESSION['user_id'])) {
        // Redirect to the login page or any other appropriate action
        header('Location: log.php');
        exit;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>MENU</title>
        <link rel="stylesheet" href="styles/menu.css">
        <script src="https://kit.fontawesome.com/8a5ecb1fb9.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <h2 class="topic">MyApps Online App Store</h2><br>
            
            <div class="navilist" id="navi">
                <br><br><a href="#">Home</a>
                <a href="application.php">Application</a>
                <a href="games.php">Games</a>
                <a href="category.php">Categories</a>
                <a href="#">About Us</a>
                <a href="Contact Us.html">Contact us</a>
                <a href="userProfile.php">Profile</a>
            </div>
            <div class="search">
                <form action="#">
                    <input type="text" placeholder="search App" name="search" class="searchbar" >
                </form>
                
            </div>
            <br><br><h4 class="h4">Mobile Games</h4><br>
            <div id="btn1">
            <button class="cont1" onclick="location.href='app.php'"><img src="images/game1.jpg" class="game"><h5 class="gamef">Clash of Clans<br><img src="images/ratings.jpg" class="rate"><br><br>Free</h5></button> 
            <button class="cont1" onclick="location.href='app.php'"><img src="images/game2.jpg" class="game"><h5 class="gamef">Free Fire<br><img src="images/ratings.jpg" class="rate"><br><br>Free</h5></button>
            <button class="cont1" onclick="location.href='app.php'"><img src="images/game3.jpg" class="game"><h5 class="gamef">Need For Speed<br><img src="images/ratings.jpg" class="rate"><br><br>Free</h5></button>
            <button class="cont1" onclick="location.href='apppay.php'"><img src="images/game4.jpg" class="game"><h5 class="gamef">Fifa 2023<br><img src="images/ratings.jpg" class="rate"><br><br>Pay $20</h5></button>
            <button class="cont1" onclick="location.href='apppay.php'"><img src="images/game5.jpg" class="game"><h5 class="gamef">Sonic<br><img src="images/ratings.jpg" class="rate"><br><br>Pay $15.4</h5></button>
            <button class="cont1" onclick="location.href='app.php'"><img src="images/game6.jpg" class="game"><h5 class="gamef">Call of Duty<br><img src="images/ratings.jpg" class="rate"><br><br>Free</h5></button>
           
        </div>
        <br><br><h4 class="h4">Social</h4><br>
        <div id="btn2">
            <button class="cont2" onclick="location.href='app.php'"><img src="images/s1.jpg" class="social"><h5 class="set">Instargram<br><img src="images/ratings.jpg" class="rate"><br><br>Free</h5></button>
            <button class="cont2" onclick="location.href='app.php'"><img src="images/s2.png" class="social"><h5 class="set">Facebook<br><img src="images/ratings.jpg" class="rate"><br><br>Free</h5></button>
            <button class="cont2" onclick="location.href='apppay.php'"><img src="images/s3.jpg" class="social"><h5 class="set">Tinder<br><img src="images/ratings.jpg" class="rate"><br><br>Pay $25.5</h5></button>
            <button class="cont2" onclick="location.href='apppay.php'"><img src="images/s4.png" class="social"><h5 class="set">Omegle<br><img src="images/ratings.jpg" class="rate"><br><br>Pay $17</h5></button>
            <button class="cont2" onclick="location.href='app.php'"><img src="images/s5.png" class="social"><h5 class="set">Whatsapp<br><img src="images/ratings.jpg" class="rate"><br><br>Free</h5></button>
            <button class="cont2" onclick="location.href='app.php'"><img src="images/s6.png" class="social"><h5 class="set">Linkedin<br><img src="images/ratings.jpg" class="rate"><br><br>Free</h5></button>
        </div>
        <br><br><h4 class="h4">Education</h4><br>
        <div id="btn3">
            <button class="cont3" onclick="location.href='app.php'"><img src="images/e1.png" class="edu"><h5 class="set3">Kahoot<br><img src="images/ratings.jpg" class="rate"><br><br>Free</h5></button>
            <button class="cont3" onclick="location.href='apppay.php'"><img src="images/e2.png" class="edu"><h5 class="set3">Photomath<br><img src="images/ratings.jpg" class="rate"><br><br>Pay $5.5</h5></button>
            <button class="cont3" onclick="location.href='apppay.php'"><img src="images/e3.jpg" class="edu"><h5 class="set3">Khan Acadamy<br><img src="images/ratings.jpg" class="rate"><br><br>Pay $13</h5></button>
            <button class="cont3" onclick="location.href='app.php'"><img src="images/e4.png" class="edu"><h5 class="set3">E-education<br><img src="images/ratings.jpg" class="rate"><br><br>Pay $10.5</h5></button>
            <button class="cont3" onclick="location.href='app.php'"><img src="images/e5.png" class="edu"><h5 class="set3">Memrise<br><img src="images/ratings.jpg" class="rate"><br><br>Free</h5></button>
            <button class="cont3" onclick="location.href='app.php'"><img src="images/e6.png" class="edu"><h5 class="set3">Duolingo<br><img src="images/ratings.jpg" class="rate"><br><br>Free</h5></button>
        </div>
        <br><br><h4 class="h4">Music</h4><br>
        <div id="btn4">
            <button class="cont4" onclick="location.href='apppay.php'"><img src="images/m1.png" class="mu"><h5 class="set3">Spotify<br><img src="images/ratings.jpg" class="rate"><br><br>Pay $19</h5></button>
            <button class="cont4" onclick="location.href='app.php'"><img src="images/m2.jpg" class="mu"><h5 class="set3">Shazam<br><img src="images/ratings.jpg" class="rate"><br><br>Free</h5></button>
            <button class="cont4" onclick="location.href='app.php'"><img src="images/m3.png" class="mu"><h5 class="set3">Youtube Music<br><img src="images/ratings.jpg" class="rate"><br><br>Free</h5></button>
            <button class="cont4" onclick="location.href='app.php'"><img src="images/m4.png" class="mu"><h5 class="set3">Google Music<br><img src="images/ratings.jpg" class="rate"><br><br>Free</h5></button>
            <button class="cont4" onclick="location.href='apppay.php'"><img src="images/m5.jpg" class="mu"><h5 class="set3">Deezer<br><img src="images/ratings.jpg" class="rate"><br><br>Pay $15.3</h5></button>
            <button class="cont4" onclick="location.href='apppay.php'"><img src="images/m6.png" class="mu"><h5 class="set3">E-Tunes<br><img src="images/ratings.jpg" class="rate"><br><br>Pay $14</h5></button>
        </div>
        <br><br><h4 class="h4">Entertaining</h4><br>
        <div id="btn5">
            <button class="cont5" onclick="location.href='app.php'"><img src="images/en1.png" class="en"><h5 class="set">TikTok<br><img src="images/ratings.jpg" class="rate"><br><br>Free</h5></button>
            <button class="cont5" onclick="location.href='app.php'"><img src="images/en2.jpg" class="en"><h5 class="set">YouTube<br><img src="images/ratings.jpg" class="rate"><br><br>Free</h5></button>
            <button class="cont5" onclick="location.href='app.php'"><img src="images/en3.jpg" class="en"><h5 class="set">Hulu<br><img src="images/ratings.jpg" class="rate"><br><br>Free</h5></button>
            <button class="cont5" onclick="location.href='apppay.php'"><img src="images/en4.png" class="en"><h5 class="set">Tubi<br><img src="images/ratings.jpg" class="rate"><br><br>Pay $10</h5></button>
            <button class="cont5" onclick="location.href='apppay.php'"><img src="images/en5.png" class="en"><h5 class="set">Netflix<br><img src="images/ratings.jpg" class="rate"><br><br>Pay $32.5</h5></button>
            <button class="cont5" onclick="location.href='apppay.php'"><img src="images/en6.png" class="en"><h5 class="set">HBO<br><img src="images/ratings.jpg" class="rate"><br><br>Pay $22</h5></button>
        </div>
        
        </div>
        <?php include 'footer.html'; ?>
    </body>
</html>