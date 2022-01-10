
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="css/index.css" rel="stylesheet" type="text/css" title="normal"/>
        <script src="javascript/switch.js" type="text/javascript"></script>
        <link rel="shortcut icon" type="image/png" href="favicon.png"/>
		<link href='https://fonts.googleapis.com/css?family=Alegreya SC' rel='stylesheet'>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather|Open+Sans">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

		
		
		
		
		
        <title>Project Booking</title>
    </head>
    <body>
	
	
	<?php

  require_once('config.php');
  
 
  ?>



        <header>
            <navbar>
                <nav><a class="active" href="index.php" >Home</a></nav>
                <nav><a href="contact.php" >Contact</a></nav>
				<nav><a href="houses.php" >Booking</a></nav>
                
				
				
				
				
				
				<nav id="switch">

                    Account
                    <a class="btn-switch" id="btn-id">
                        <span><button id="reg_button" onclick="document.getElementById('id01').style.display='block'">Log In</button></span>
                        <br>
                        <span><button id="reg_button" onclick="document.getElementById('id02').style.display='block'">Sign Up</button><span>
						<br>
						
                    </a>
                </nav>
				
				<?php
				
								if (isset($_SESSION['userid'])) { 
								 echo "<nav id='profile' ><a  href='logout.php' >Log out</a></nav>";
								 echo "<nav id='profile' ><a  href='profile.php' >Profile</a></nav>";
								 		if ($_SESSION['username']=='admin') { 
											echo "<nav id='profile' ><a  href='php/table.php' >Table</a></nav>";
								}
								 
								}

								 
			

				
				?>
				
				<style>
				body {background-color: #1B2532;}

				</style>

            </navbar>
			
        </header>

            
			
						<div class="hero-image">
			  <div class="hero-text">

				<h1 style="font-size:50px">Booking houses</h1>
				<p>We've taken care to detail the accommodation to make your stay a great experience with barbecue, air conditioning and detailed things.</p>
				<a href="houses.php"><button>Go to booking</button></a>
			  </div>
			</div>
			

			
			<!-- The Modal -->
		<div id="id01" class="modal">
		  <span onclick="document.getElementById('id01').style.display='none'"
		class="close" title="Close Modal">&times;</span>

		  <!-- Modal Content -->
		  <form class="modal-content animate" method ="post" action="index.php">
			<div class="imgcontainer">
			  <img src="images/img_avatar2.png"  alt="Avatar" class="avatar">
			</div>

			<div class="container_2">
			  <label for="username"><b>Username</b></label>
			  <input type="text" placeholder="Enter Username" name="username" required>

			  <label for="password"><b>Password</b></label>
			  <input type="password" placeholder="Enter Password" name="password" required>

			  <button id="button_login" type="submit"  name="loging-in" ">Login</button>
			  <label>
				<input type="checkbox" checked="checked" name="remember"> Remember me
			  </label>
			</div>

			<div class="container_2" style="background-color:#f1f1f1">
			  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
			  <span class="psw">Forgot <a href="contact.php">password?</a></span>
			</div>
		  </form>
		</div>
		
		
		
		<!-- The Modal (contains the Sign Up form) -->
		<div id="id02" class="modal">
		  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">times;</span>
		  <form class="modal-content" method="post" action="index.php">
			<div class="container_2">
			  <h1>Sign Up</h1>
			  <hr>
			  <p>Please fill in this form to create an account.</p>
			  <label for="email"><b>Email</b></label>
			  <input type="text" placeholder="Enter Email" name="email" required>
			  
				<label for="username"><b>Username</b></label>
			  <input type="text" placeholder="Enter Username" name="username" required>
			  
			  <label for="password1"><b>Password</b></label>
			  <input type="password" placeholder="Enter Password" name="password1" required>

			  <label for="password2"><b>Repeat Password</b></label>
			  <input type="password" placeholder="Repeat Password" name="password2" required>
			  
			  <label for="phone"><b>Phone number</b></label>
			  <input type="text" placeholder="Enter Phone number" name="phone" required>

			  <label>
				<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
			  </label>


			  <div class="clearfix">
				<button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn_2">Cancel</button>
				<button type="submit"  name='signing-up' class="signupbtn_2">Sign Up</button>
			  </div>
			  </br>
			  			  </br>
			  </br>

			</div>
		  </form>
		</div>
		
		
<div class="heading" id="myHeader">
  <h1>House gallery	</h1>
</div>


<div class="container_images">

  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="images/home_1_wide.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="images/home_2_wide.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="images/home_3_wide.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="images/home_4_wide.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="images/home_5_wide.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="images/home_6_wide.jpg" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="images/home_1.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods House">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/home_2.jpg" style="width:100%" onclick="currentSlide(2)" alt="House with View">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/home_3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Winter House">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/home_4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Nature and sunrise">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/home_5.jpg" style="width:100%" onclick="currentSlide(5)" alt="Night Winter House">
    </div>    
    <div class="column">
      <img class="demo cursor" src="images/home_6.jpg" style="width:100%" onclick="currentSlide(6)" alt="Tech House">
    </div>
  </div>


</div>






<script>




var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}





// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}




function myFunction() {
  // Get the snackbar DIV
  var x = document.getElementById("snackbar");

  // Add the "show" class to DIV
  x.className = "show";

  // After 3 seconds, remove the show class from DIV
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}




</script>


 

    </body>
</html>
