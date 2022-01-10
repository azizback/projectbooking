
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

        <link href="css/index.css" rel="stylesheet" type="text/css" title="normal"/>
        <script src="javascript/switch.js" type="text/javascript"></script>
        <link rel="shortcut icon" type="image/png" href="favicon.png"/>
		<link href='https://fonts.googleapis.com/css?family=Alegreya SC' rel='stylesheet'>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather|Open+Sans">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

		
		
		
        <title>Project Booking</title>
    </head>
    <body>
	
	<style>
	.modal {
  display: inline;
	}
	#form_add {
  width: 500px;
  margin: 0 auto;
  padding: 50px;
}

div.elem-group {
  margin: 20px 0;
}

div.elem-group.inlined {
  width: 49%;
  display: inline-block;
  float: left;
  margin-left: 1%;
}

label {
  display: block;
  font-family: 'Nanum Gothic';
  padding-bottom: 10px;
  font-size: 1.25em;
}

input, select, textarea {
  border-radius: 2px;
  border: 2px solid #777;
  box-sizing: border-box;
  font-size: 1.25em;
  font-family: 'Nanum Gothic';
  width: 100%;
  padding: 10px;
}

div.elem-group.inlined input {
  width: 95%;
  display: inline-block;
}

textarea {
  height: 250px;
}

hr {
  border: 1px dotted #ccc;
}


	</style>

	<?php

  require_once('config.php');

	
	?>
	
        <header>
            <navbar>
                <nav><a  href="index.php" >Home</a></nav>
                <nav><a  href="contact.php" >Contact</a></nav>
				<nav><a class="active" href="houses.php" >Booking</a></nav>
                
				
				
				
				
				
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
			  
			  
			  
			  <div id="id03" class="modal">
		  <form class="modal-content" method="post" action="houses.php">
			<div class="container_2">
			  <div id="form_add">
  <div class="elem-group">
	<p style="color:tomato;">To register you have to log in first!</p>
    <label for="name">Your Name</label>
    <input type="text" id="name" name="visitor_name" readonly placeholder=<?php echo $_SESSION['username'];?>>
  </div>
  <div class="elem-group">
    <label for="email">Your E-mail</label>
    <input type="text" id="email" name="visitor_email" readonly placeholder=<?php echo $_SESSION['email']; ?> >
  </div>
  <div class="elem-group">
    <label for="phone">Your Phone</label>
    <input type="text" id="phone" name="visitor_phone" readonly placeholder=<?php echo $_SESSION['phone']; ?> >
  </div>
  <hr>
  


  <div class="elem-group inlined">
    <label for="checkin-date">Check-in Date</label>
	<input type="text" id="datepicker" name="checkin" required>

  </div>
  <div class="elem-group inlined">
    <label for="checkout-date">Check-out Date</label>
	<input type="text" id="datepicker_2" name="checkout" required>

  </div>
  <div class="elem-group">
    <label for="room-selection">Selected House</label>
    <select id="room-selection" name="house_number_2" >
		
        <option value="2">2</option>

		

    </select>

  </div>
  <hr>

  <div class="elem-group">

    <label for="message">Anything Else?</label>
    <textarea id="message" name="visitor_message" placeholder="Tell us anything else that might be important."></textarea>
  </div>
  <a href="houses.php"><button type="button"  class="cancelbtn_2">Cancel</button></a>
  <button type="submit"   name="booking_button_2" class="signupbtn_2">Book The Rooms</button>
  
</form>

</br></br>
</div>
			  </div>


			</div>
			</div>
		</div>
		
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script>

			
$(document).ready(function(){
	
	    var date_range = <?php echo json_encode($datesArray_2); ?>;


	
	$( "#datepicker" ).datepicker({
		beforeShowDay: function(date) {
			
			var string = $.datepicker.formatDate('yy-mm-dd', date);

			for (var i = 0; i < date_range.length; i++) {
				
				if (Array.isArray(date_range[i])) {
					
					var from = new Date(date_range[i][0]);
					var to = new Date(date_range[i][1]);
					var current = new Date(string);
					
					if (current >= from && current <= to) return false;
				}
				
			}
			return [date_range.indexOf(string) == -1]
		}
	});
	
		$( "#datepicker_2" ).datepicker({
		beforeShowDay: function(date) {
			
			var string = $.datepicker.formatDate('yy-mm-dd', date);

			for (var i = 0; i < date_range.length; i++) {
				
				if (Array.isArray(date_range[i])) {
					
					var from = new Date(date_range[i][0]);
					var to = new Date(date_range[i][1]);
					var current = new Date(string);
					
					if (current >= from && current <= to) return false;
				}
				
			}
			return [date_range.indexOf(string) == -1]
		}
	});
});


		</script>
	</body>
</html>