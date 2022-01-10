<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="css/index.css" rel="stylesheet" type="text/css" title="normal"/>

        <script src="javascript/switch.js" type="text/javascript"></script>
        <link rel="shortcut icon" type="image/png" href="favicon.png"/>
		<link href='https://fonts.googleapis.com/css?family=Alegreya SC' rel='stylesheet'>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather|Open+Sans">
		

		
		
        <title>Project Booking</title>

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>

	<?php

  require_once('config.php');
  
 
	?>



        <header>
            <navbar>
                <nav><a  href="index.php" >Home</a></nav>
                <nav><a class="active" href="contact.php" >Contact</a></nav>
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
				


            </navbar>
			
        </header>

			
						<div class="hero-image">
			  <div class="hero-div">
			  
	<section class="ftco-section">
		<div class="container">

			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="wrapper img" style="background-image: url(images/img.jpg);   ">
						<div class="row">
							<div class="col-md-9 col-lg-7">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Get in touch with us</h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				            Your message was sent, thank you!
				      		</div>
									<form method="POST" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Full Name</label>
													<input type="text" class="form-control" name="name" id="name" placeholder="Name">
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="email">Email Address</label>
													<input type="email" class="form-control" name="email" id="email" placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="subject">Subject</label>
													<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="#">Message</label>
													<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Send Message" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
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

			  <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

			  <div class="clearfix">
				<button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn_2">Cancel</button>
				<button type="submit"  name='signing-up' class="signupbtn_2">Sign Up</button>
			  </div>
	

			</div>
		  </form>
		</div>
		
		
		
		
		<script>
		
				// Get the modal
		var modal = document.getElementById('id01');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}


		</script>
		
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

