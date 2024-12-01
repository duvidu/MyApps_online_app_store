<!DOCTYPE html>
<html lang = "en">
<head>
     
	 
	 <meta charset = "UTF-8">
     <meta http-equiv = "X-UA-Compatible" content = "IE = edge">
     <meta name = "viewport" content = "width = device-width,initial-scale = 1.0">
    
	 
	 <!------Connecting with the CSS page------>
	 <link rel = "stylesheet" href = "styles/settings.css"> 
	
	 
	 <title> MyApps.com </title>
	
	 
	 <!------Connecting with other web pages on this website through JavaScript------>
     <script> function windowOpen () {window.open ("userProfile.php");} </script> <!--Instead of www.account.com, the link on the 'use account page' should be attached -->
     <script> function windowOpen () {window.open ("userProfile.php");} </script> <!--Instead of www.account.com, the link on the 'use account page' should be attached -->
     <script> function windowOpen () {window.open ("Manage Apps and Device.php");} </script> <!--Instead of www.updates.com, the link on the 'manage app and device page' should be attached -->
     <script> function windowOpen () {window.open ("Manage Apps and Device.php");} </script> <!--Instead of www.storage.com, the link on the 'manage app and device page' should be attached -->
     <script> function windowOpen () {window.open ("feedback.html");} </script> <!--Instead of www.security.com, the link on the 'help and feedback page' should be attached -->


</head>
<body> 
     
	 
     <!------header part------>
	 <div class = "header">
	     <h1> My Apps </h1>
	     <h4> Online App Store </h4>
     </div>
     <hr/> 
     
	 
	 <!------content part------>
	 <center>
	     <h1> Settings </h1> 
             
			 
			 <div class = "content">
				 <ul>
				     <li>
		                 <h5> Account </h5> 
				     </li>
				 </ul>
                 <div class = "content-1">
			         <button onclick = "windowOpen ()"> Name </button>
                     <button onclick = "windowOpen ()"> Email </button>
			     </div>

				 
				 
				 
				 <ul>
				     <li> 
					     <h5> Notifications </h5> 
					 </li>
				 </ul>
                 <div class = "content-2">
					 <button onclick = "windowOpen ()"> Updates </button>
				 </div>
                     
					 
				 
				 
				 <ul> 
				     <li> 
					     <h5> Network Preferences </h5> 
					 </li> 
			     </ul>
                 <div class = "content-3">
					 <p> App download preferences </p>
				 </div>	 
                 <div class = "content-4">
					 <form>
                         <input type = "radio" name = "app" value = "Over any network"> Over any network
                             <br>
                         <input type = "radio" name = "app" value = "Over Wi-Fi only"> Over Wi-Fi only
                             <br>
                             <input type = "radio" name = "app" value = "Ask me every time"> Ask me every time 
                     </form>
						 
			     </div>
                 <div class = "content-5">
					 <p> Auto-play videos </p>
				 </div>	 
                 <div class = "content-6">
					 <form>
                         <input type = "radio" name = "videos" value = "Auto-play videos at any time"> Auto-play videos at any time
                         <br>
                         <input type = "radio" name = "videos" value = "Auto-play videos over Wi-Fi only"> Auto-play videos over Wi-Fi only
                         <br>
                         <input type = "radio" name = "videos" value = "Don't auto-play videos"> Don't auto-play videos 
                     </form>
				 </div>
			         
					 
				 
				 
				 <ul>
					 <li> 
					     <h5> Theme </h5> 
				     </li>
			     </ul>
				 <div class = "content-7">
					 <form action = "">
					     <select name = "Themes">
						     <option value = "Light"> Light </option>
							 <option value = "Dark"> Dark </option>
                         </select>
                     </form>
			     </div>
                     
					 
					 
					 
				 <ul>
					 <li> 
					     <h5> Storage and Data </h5> 
					 </li>
				 </ul>
                 <div class = "content-8">
					 <button onclick = "windowOpen ()"> Storage </button>
			     </div>
                     
					 
					 
					 
				 <ul>
					 <li> 
					     <h5> Privacy and Security </h5> 
				     </li>
			     </ul>
				 <div class = "content-9">
                     <button onclick = "windowOpen ()"> Security </button>
			     </div>
                     
					 
					 
					 
				 <ul>
					 <li> 
					     <h5> Languages Preferences </h5> 
					 </li>
				 </ul>
				 <div class = "content-10">
                     <form action = "">
					     <select name = "Languages">
						     <option value = "Spanish"> Spanish </option>
							 <option value = "Arabic"> Arabic </option>
							 <option value = "French"> French </option>
							 <option value = "Sinhala"> Sinhala </option>
							 <option value = "German"> German </option>
							 <option value = "Russian"> Russian </option>
							 <option value = "Portuguese"> Portuguese </option>
							 <option value = "Japanese"> Japanese </option>
							 <option value = "Hindi"> Hindi </option>
							 <option value = "Korean"> Korean </option>
							 <option value = "Italian"> Italian </option>
							 <option value = "Chinese"> Chinese </option>
							 <option value = "Bengali"> Bengali </option>
							 <option value = "Mandarin"> Mandarin </option>
							 <option value = "Greek"> Greek </option>
			             </select>
					 </form>
				 </div>
             </div>
     
	 
	 </center>
     <hr/>
      
	 <?php include 'footer.html'; ?>
	 <!------fotter part------> 
	 
	 
		 
</body>
</html>