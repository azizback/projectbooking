
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
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

		
		
		
		
		
        <title>Project Booking</title>
    </head>
    <body>
	
	
	
	<?php

  require_once('config.php');
  
 
	?>

<style>

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 4% auto 15% auto; /* 4% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}



header nav a {
    display: block;
    color: white;
    text-align: center;
    padding: 25px 25px;
    text-decoration: none;
    transition-duration: 0.4s;
}

header navbar nav a:hover{
	    text-decoration: none;
	color:white;
    background-color: #718187;
}



html {
  box-sizing: border-box;
}

#myHeader {
	padding-top:0em;
	margin-top:0;
}

#houses {

  padding: 8em 0 0 0;
}
*, *:before, *:after {
  box-sizing: inherit;
}

.column {


	
  float: left;
  width: 100%;
  padding: 0 150px 0 150px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.hero-div {

color:white;
}

.card {
	
	
	    border-radius: 8px;

	background-color:#4E5B64;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container_2 {
	
  padding: 0 30px;
}

.container_2::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: #DDDDDD;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #1B2532;
  text-align: center;
  cursor: pointer;
  width: 100%;

}

.button:hover {
  background-color: #555;
}

#table_info {
	margin-top:25px;
	width:100%;
}
#card_2 {
	text-align:center;	
}

  .cancelbtn {
	  margin:10px;
  }
  .bold {
	  font-weight: bold;
	  
  }
  
 #approve a:hover {
	   color: grey;
 }
  
a {
	color:white;
	
  text-decoration: none;
}



a:hover {
  text-decoration: none;
  color: red;
}


</style>

        <header>
            <navbar>
                <nav><a  href="index.php" >Home</a></nav>
                <nav><a  href="contact.php" >Contact</a></nav>
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
											echo "<nav class='active' id='profile' ><a  href='php/table.php' >Table</a></nav>";
								}
								 
								}
				
				?>
				


            </navbar>
			
        </header>


            
			
				<div class="hero-image">
			  <div class="hero-div">
<div id="houses">
			  
<div class="row">

  <div class="column">
    <div class="card">

      <div id ="card_2" class="container"></br>
        <h2>  Table of bookings: </h2>

		
		
		 <table  id="table_info" class="table" class="table table-hover" >
		 <thead>
 <tr>
 <td>ID</td>
  <td>UserID</td>
 <td>House</td>
   <td>Start date</td>
  <td>End date</td>
 <td >Approved</td>
  <td></td>
  <td>Cancelled</td>
  <td></td>
    <td>Comment</td>
	  <td></td>
 </tr>
    </thead>
 <?php
   $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$result = mysqli_query($dbc, "SELECT * FROM booking"); 

//Putting the database info to the table
 while($res = mysqli_fetch_array($result)) {
	 echo "<tbody>";
	 echo "<tr>";
	 echo "<td>".$res['BookingID']."</td>";
	 	 echo "<td>".$res['UserID']."</td>";
	 echo "<td>".$res['HouseNumber']."</td>";
	 echo "<td>".$res['StartDate']."</td>";
	 echo "<td>".$res['EndDate']."</td>";
	 if ($res['Approved']==0) {
		  echo "<td>No</td>";
	 } else {
		 echo "<td>Yes</td>";
	 }	
	echo "<td id='approve' class='bold'><a href=\"php/approve.php?id=$res[BookingID]\" >Approve</a></td>";

	 
	 	 if ($res['ToCancel']==0) {
		  echo "<td>No</td>";
	 } else {
		 echo "<td>Yes</td>";
	 }	
	echo	"<td class='bold'><a href=\"php/cancel.php?id=$res[BookingID]\" >Cancel</a></td>";
	if ($res['Comment']=="") {
		  echo "<td>No</td>";
	 } else {
		 echo "<td>".$res['Comment']."</td>";
	 }	
	
	echo	"<td class='bold'><a href=\"php/delete.php?id=$res[BookingID]\" >Delete</a></td>";

 }
 
  mysqli_close($dbc);

	
 ?>
  </table>
      </div>
    </div>
  </div>
  

</div>

</div >
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
		
			</div>
		  </form>
		</div>





		






<script>

$( document ).ready(function() {
  $('#table_info').SetEditable({
	  columnsEd: "0,1,2,3,4,5,6",
	  onEdit: function(columnsEd) {
		var empId = columnsEd[0].childNodes[1].innerHTML;
        var empName = columnsEd[0].childNodes[3].innerHTML;
        var gender = columnsEd[0].childNodes[5].innerHTML;
        var age = columnsEd[0].childNodes[7].innerHTML;
        var skills = columnsEd[0].childNodes[9].innerHTML;
		var address = columnsEd[0].childNodes[11].innerHTML;
		$.ajax({
			type: 'POST',			
			url : "action.php",	
			dataType: "json",					
			data: {id:empId, name:empName, gender:gender, age:age, skills:skills, address:address, action:'edit'},			
			success: function (response) {
				if(response.status) {
				}						
			}
		});
	  },
	  onBeforeDelete: function(columnsEd) {
	  var empId = columnsEd[0].childNodes[1].innerHTML;
	  $.ajax({
			type: 'POST',			
			url : "action.php",
			dataType: "json",					
			data: {id:empId, action:'delete'},			
			success: function (response) {
				if(response.status) {
				}			
			}
		});
	  },
	});
});


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




</script>


 
<!--

//Putting the database info to the table
 while($res = mysqli_fetch_array($result)) {
	 echo "<tr color='black'>";
	 echo "<td>".$res['name']."</td>";
	 echo "<td>".$res['email']."</td>";
	 echo "<td>".$res['house']."</td>";
	 echo "<td>".$res['start_date']."</td>";
	 echo "<td>".$res['end_date']."</td>";
	 
	 //links to edit and delete scripts
	 echo "<td><button><a href=\"edit.php?id=$res[id]\">Edit</a></button>  <button><a
	href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want
	to delete?')\">Delete</a></td></button>";
 }
 
 //closing the connection
	$mysqli->close();
	
 ?>
 </table>

-->

 
</body>
</html>
