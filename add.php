<!DOCTYPE html>

<html>
<head>
 <title>Booking</title>
        <meta charset="UTF-8">
				<meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="css/index.css" rel="stylesheet" type="text/css" title="normal"/>
        <script src="javascript/switch.js" type="text/javascript"></script>
        <script src="javascript/booking.js" type="text/javascript"></script>
        <link rel="shortcut icon" type="image/png" href="favicon.png"/>
        <title>Project Booking</title>

        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
        <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" />



		<link href='https://fonts.googleapis.com/css?family=Alegreya SC' rel='stylesheet'>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather|Open+Sans">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

		


</head>
<body>


<style>
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

button {
  height: 50px;
  background: orange;
  border: none;
  color: white;
  font-size: 1.25em;
  font-family: 'Nanum Gothic';
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  border: 2px solid black;
}
</style>


<?php

  require_once('config.php');
  
 error_reporting(0); 
// to hide the errors because we are handling them ourselves


//including the database connection file
include_once("php/config.php");



//error handling function to check the length
function length_check($name) {
echo "<p style='text-align: center><font color='red'>$name value is too long.</font></p>";
}

//Error handling function to check the dates
function date_check() {
echo "<p style='text-align: center><font color='red'>Choose the right dates.</font></p>";
}

//error handling function to check is empty
function value_check($value) {
echo "<p style='text-align: center><font color='red'>$value is empty.</font></p>";
}

//error handling to check if the value int is valid
function valid_int($value){
	echo "<p style='text-align: center><font color='red'>$value number is not valid</font></p>";
}




//actions if we press the "submit" button
if(isset($_POST['Submit'])) {

	

//creating the variables for every input and sanitize it
 $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
 $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  $house = filter_var($_POST['house'], FILTER_SANITIZE_NUMBER_INT);
  $start_date = filter_var($_POST['firstdate'], FILTER_SANITIZE_STRING);
  $end_date = filter_var($_POST['lastdate'], FILTER_SANITIZE_STRING);
  
  



 // checking empty fields
 if(empty($name) || empty($house) || empty($email) || $start_date>=$end_date) {
 if(empty($name)) {
 value_check("Name");
 }
 
 //check whether the date is correct
  if($start_date>=$end_date) {
 date_check();
 }
 
   //validate the length of name
   if(strlen($name)>20) {
 length_check($name);
 }
 
  //validate the length of email
   if(strlen($email)>25) {
 length_check($email);
 }
 
 //check if the house is a valid number_format
   if(!filter_var($house, FILTER_VALIDATE_INT) === true) {
 valid_int("House");
 }
 
 //check if email is empty
 if(empty($email)) {
 value_check("Email");
 }

 //link to the previous page
 echo "<br/><button id='button_add' width=50px><a href='javascript:self.history.back();'>Go Back</a></button>";
 } else {
	 
 // if all the fields are filled (not empty)
 //insert data to database using function from config.php
 data_write($name,$email,$house,$start_date,$end_date, $mysqli);
 
  //display success message
 echo "<p><font color='green'>Data added successfully.</p>";
 echo "<br/><button id='button_add' width=50px><a href='table.php'>View Result</a></button>";
 }

//closing the connection
$mysqli->close();
}
?>




        <header>
            <navbar>
                <nav><a  href="index.php" >Home</a></nav>
                <nav><a href="contact.php" >Contact</a></nav>
				<nav><a class="active" href="add.php" >Booking</a></nav>
                
				
				
				
				
				
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
	<br>	




			

		

		
		
		
		<!--

 <form action="add.php" method="post" name="form1">
 <table id="booking_table" width="50%" border="0">
 <tr>
 <td>Name</td>
 <td><input type="text" name="name"></td>
 </tr>
 <tr>
 <td>Email</td>
 <td><input type="text" name="email"></td>
 </tr>
 <tr>
 <td>House number</td>
 <td><input type="radio" name="house" value="1" required checked><label> House 1 </label>
     <input type="radio" name="house" value="2" required><label> House 2</label>
     <input type="radio" name="house" value="3" required><label> House 3</label></td>
 </tr>
 <tr>
 <td>Start date</td>
 <td><input type="date" id="firstdate" name="firstdate"></td>
 </tr>
 <tr>
 <td>End number</td>
 <td><input type="date" id="lastdate" name="lastdate"></td>
 </tr>
 
  <tr>
 <td>End number</td>
 <td></td>
 </tr>
 
 <tr>
 <td></td>
 <td><input type="submit" name="Submit" value="Add"></td>

 </tr>
 </table>
 </form>
 
 
 -->
 
 <button id="reg_button" onclick="document.getElementById('id03').style.display='block'">Sign Up</button>

			<!-- The Modal -->
		<div id="id01" class="modal">
		  <span onclick="document.getElementById('id01').style.display='none'"
		class="close" title="Close Modal">&times;</span>

		  <!-- Modal Content -->
		  <form class="modal-content animate" method ="post" action="index.php">
			<div class="imgcontainer">
			  <img src="images/img_avatar2.png"  alt="Avatar" class="avatar">
			</div>

			<div class="container">
			  <label for="username"><b>Username</b></label>
			  <input type="text" placeholder="Enter Username" name="username" required>

			  <label for="password"><b>Password</b></label>
			  <input type="password" placeholder="Enter Password" name="password" required>

			  <button id="button_login" type="submit"  name="loging-in" ">Login</button>
			  <label>
				<input type="checkbox" checked="checked" name="remember"> Remember me
			  </label>
			</div>

			<div class="container" style="background-color:#f1f1f1">
			  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
			  <span class="psw">Forgot <a href="#">password?</a></span>
			</div>
		  </form>
		</div>
		
		
		
		<!-- The Modal (contains the Sign Up form) -->
		<div id="id02" class="modal">
		  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">times;</span>
		  <form class="modal-content" method="post" action="index.php">
			<div class="container">
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
			  </br>
			  			  </br>
			  </br>

			</div>
		  </form>
		</div>
 


<div id="form_add">
<form action="reservation.php" method="post">
  <div class="elem-group">
    <label for="name">Your Name</label>
    <input type="text" id="name" name="visitor_name" readonly placeholder=<?php echo $_SESSION['username']; ?> pattern=[A-Z\sa-z]{3,20} required>
  </div>
  <div class="elem-group">
    <label for="email">Your E-mail</label>
    <input type="email" id="email" name="visitor_email" readonly placeholder=<?php echo $_SESSION['email']; ?> required>
  </div>
  <div class="elem-group">
    <label for="phone">Your Phone</label>
    <input type="tel" id="phone" name="visitor_phone" readonly placeholder=<?php echo $_SESSION['phone']; ?> pattern=(\d{3})-?\s?(\d{3})-?\s?(\d{4}) required>
  </div>
  <hr>

  <div class="elem-group inlined">
    <label for="checkin-date">Check-in Date</label>
    <input type="date" id="checkin-date" name="checkin" required>
  </div>
  <div class="elem-group inlined">
    <label for="checkout-date">Check-out Date</label>
    <input type="date" id="checkout-date" name="checkout" required>
  </div>
  <div class="elem-group">
    <label for="room-selection">Select the House</label>
    <select id="room-selection" name="house_number" required>
        <option value="">Choose a House from the List</option>
        <option value="connecting">House 1</option>
        <option value="adjoining">House 2</option>
        <option value="adjacent">House 3</option>
    </select>
  </div>
  <hr>
  <div class="elem-group">
    <label for="message">Anything Else?</label>
    <textarea id="message" name="visitor_message" placeholder="Tell us anything else that might be important." required></textarea>
  </div>
  <button type="submit">Book The Rooms</button>
</form>

</div>


        <script> 
		
		var currentDateTime = new Date();
var year = currentDateTime.getFullYear();
var month = (currentDateTime.getMonth() + 1);
var date = (currentDateTime.getDate() + 1);

if(date < 10) {
  date = '0' + date;
}
if(month < 10) {
  month = '0' + month;
}

var dateTomorrow = year + "-" + month + "-" + date;
var checkinElem = document.querySelector("#checkin-date");
var checkoutElem = document.querySelector("#checkout-date");

checkinElem.setAttribute("min", dateTomorrow);

checkinElem.onchange = function () {
    checkoutElem.setAttribute("min", this.value);
}


		


var unavailableDates = ["9-3-2012", "14-3-2012", "15-3-2012"];

function unavailable(date) {
    dmy = date.getDate() + "-" + (date.getMonth() + 1) + "-" + date.getFullYear();
    if ($.inArray(dmy, unavailableDates) == -1) {
        return [true, ""];
    } else {
        return [false, "", "Unavailable"];
    }
}

$(function() {
    $("#iDate").datepicker({
        defaultDate: new Date("3-1-2012"),
        dateFormat: 'dd MM yy',
        beforeShowDay: unavailable
    });

});


// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}





        </script>

</body>
</html>
