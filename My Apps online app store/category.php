
<!DOCTYPE html>
<html lang = "en">
<head>
     
	 
	 <meta charset = "UTF-8">
     <meta http-equiv = "X-UA-Compatible" content = "IE = edge">
     <meta name = "viewport" content = "width = device-width,initial-scale = 1.0">
    
	 
	 <!------Connecting with the CSS page------>
	 <link rel = "stylesheet" href = "styles/category.css">  
	
	 
	 <title> MyApps.com </title> 
	 
	 
	 <!------Connecting with other web page on this website through JavaScript------>
	 <script> function windowOpen1 () {window.open ("menu.php");} </script> <!--Instead of www.education.com, the link on the 'home page' should be attached -->
     <script> function windowOpen2 () {window.open ("menu.php");} </script> <!--Instead of www.entertainment.com, the link on the 'home page' should be attached -->
     <script> function windowOpen3 () {window.open ("menu.php");} </script> <!--Instead of www.mobile games.com, the link on the 'home page' should be attached -->
     <script> function windowOpen4 () {window.open ("menu.php");} </script> <!--Instead of www.music.com, the link on the 'home page' should be attached -->
     <script> function windowOpen5 () {window.open ("menu.php");} </script> <!--Instead of www.social apps.com, the link on the 'home page' should be attached -->
     <script> function windowOpen6 () {window.open ("category-feedback.html");} </script> 


	 </head>
<body> 

     
	 <!------header part------>
	 <div class = "header">
	     <h1> My Apps </h1>
	     <h4> Online App Store </h4>
         <center>
		     <img src = "images/search-bar-icon.jpg" width = "300px" height= "55px"> 
		 </center>
	 </div> 
     <hr/>
	 
	 
	 <!------content part------>
	 <center>
	     <h1> Categories </h1> 
		     
			   
             <div class = "content-A">
			     
				 
				 <div class = "content-1">
				     <div class = "content-1-1">
					     <img src = "images/education-icon.png" width = "60px" height = "38px" align = "left">
					 </div>

					 <br> 
					 <br>
					 <br>
					 <br>
					 
					 <div class = "content-1-2">
					     <img src = "images/entertainment-icon.jpg" width = "60px" height = "38px" align = "left">
					 </div>
					 
					 <br>
					 <br> 
					 <br>
					 <br>
					 
					 <div class = "content-1-3">
					     <img src = "images/mobile-games-icon.png" width = "60px" height = "38px" align = "left">
					 </div>
					 
					 <br>
					 <br>
					 <br>
					 <br>
					 
					 <div class = "content-1-4">
					     <img src = "images/music-icon.jpg" width = "60px" height = "38px" align = "left">
					 </div>
					 
					 <br>
					 <br>
					 <br>
					 <br>

					 <div class = "content-1-5">
					     <img src = "images/social-apps-icon.jpg" width = "60px" height = "38px" align = "left">
					 </div>
				 </div> 
			 
			 
                 
				 
				 <div class = "content-2">
				     <div class = "content-2-1">
					     <button onclick = "windowOpen1 ()"> Education </button>
					 </div>

					 <br> 
					 <br>
					 <br>
					 
					 <div class = "content-2-2">
					     <button onclick = "windowOpen2 ()"> Entertainment </button>
					 </div>
					 
					 <br>
					 <br>
					 <br>
					 
					 <div class = "content-2-3">
					     <button onclick = "windowOpen3 ()"> Mobile Games </button>
					 </div>
					 
					 <br>
					 <br>
					 <br>
					 
					 <div class = "content-2-4">
					     <button onclick = "windowOpen4 ()"> Music </button>
					 </div>
					 
					 <br>
					 <br>
					 <br>

					 <div class = "content-2-5">
					     <button onclick = "windowOpen5 ()"> Social Apps </button>
					 </div>
				 </div> 
                     				 
			 
		     </div>
			 
			
	 </center>
	 
	 
	 <div class = "content-B">
	     <center>
		 <button onclick = "windowOpen6 ()"> Category Feedback </button> </center>
	 </div>
     
	 
	 <hr/>
      
	 
	 
			 
			 
</body>
</html>