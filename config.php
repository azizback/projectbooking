<?php
session_start();
	
	  if (!isset($_SESSION['userid'])) {
    if (isset($_COOKIE['userid']) && isset($_COOKIE['username'])) {
      $_SESSION['userid'] = $_COOKIE['userid'];
      $_SESSION['username'] = $_COOKIE['username'];
      $_SESSION['email'] = $_COOKIE['email']; 
	  $_SESSION['phone'] = $_COOKIE['phone'];
    }
  }
  
  
    $connectstr_dbhost = 'localhost';
    $connectstr_dbname = 'localdb';
    $connectstr_dbusername = 'root';
    $connectstr_dbpassword = '';

    foreach ($_SERVER as $key => $value) {
        if (strpos($key, "MYSQLCONNSTR_localdb") !== 0) {
            continue;
        }

        $connectstr_dbhost = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
        $connectstr_dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
        $connectstr_dbusername = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
        $connectstr_dbpassword = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
    }
    // Define database connection constants
    define('DB_HOST', $connectstr_dbhost);
    define('DB_USER',  $connectstr_dbusername);
    define('DB_PASSWORD', $connectstr_dbpassword);
    define('DB_NAME', $connectstr_dbname);
	
	
	


 
  // Connect to the database
  $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

  if (isset($_POST['signing-up'])) {
    // Get the signup data from the POST
    $username = mysqli_real_escape_string($dbc, trim($_POST['username'])); //mysqli_real_escape_string is used to enhance security
    $password1 = mysqli_real_escape_string($dbc, trim($_POST['password1']));
    $password2 = mysqli_real_escape_string($dbc, trim($_POST['password2']));
    $email = mysqli_real_escape_string($dbc, trim($_POST['email']));
	 $phone = mysqli_real_escape_string($dbc, trim($_POST['phone']));

    if (!empty($username) && !empty($password1) && !empty($password2) && !empty($email) && !empty($phone) && ($password1 == $password2)) {
      // Check that the provided username does not yet exist in the database
      $query = "SELECT * FROM loginform WHERE Username = '$username'";
      $data = mysqli_query($dbc, $query);
      if (mysqli_num_rows($data) == 0) {
        // The username does not exist yet, so insert the data into the database.
      	// No need to add userid, because teh userid is configured with AUTO-INCREMENT in the table. MySQL will automatically generate the userid
        // SHA is used to encrypt the password
      	$query = "INSERT INTO loginform (Username, Password, Email, Phone) VALUES ('$username', SHA('$password1'), '$email', '$phone')"; 
        mysqli_query($dbc, $query);
        
        // Get the userid of the just created account
        $query = "SELECT ID FROM loginform WHERE Username = '$username'";
        $data = mysqli_query($dbc, $query);
        $row = mysqli_fetch_array($data);
        
        // Set the session variables to hold the userid, username, and email of the just created account. Set also the cookies.
        $_SESSION['userid'] = $row['ID'];
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
		$_SESSION['phone'] = $phone;
        setcookie('userid', $row['ID'], time() + (60 * 60 * 24 * 30));    // expires in 30 days
        setcookie('username', $username, time() + (60 * 60 * 24 * 30));  // expires in 30 days     
        setcookie('email', $email, time() + (60 * 60 * 24 * 30));  // expires in 30 days
		setcookie('phone', $phone, time() + (60 * 60 * 24 * 30));  // expires in 30 days
        
                
        // Confirm success with the user
					echo '<script type="text/JavaScript"> 
				 window.alert("You signed up successfully!");
				 </script>';
				 

      }
      else {
        // An account already exists for this username, so display an error message


		echo '<script type="text/JavaScript"> 
				 window.alert("An account already exists for this username. Please use a different address.");
				 </script>';
      }
    }
    else {
	  echo '<script type="text/JavaScript"> 
				 window.alert("You must enter all of the sign-up data, including the desired password twice.");
				 </script>';
    }
  }



  // Clear the error message
  $error_msg = "";

  // If the user isn't logged in, try to log him/her in
  if (!isset($_SESSION['userid'])) 
  {
    if (isset($_POST['loging-in'])) {
      // Connect to the database

      // Grab the user-entered log-in data
      $username = mysqli_real_escape_string($dbc, trim($_POST['username']));
      $password = mysqli_real_escape_string($dbc, trim($_POST['password']));

      if (!empty($username) && !empty($password)) {
        // Fetch the userid, username, password, and city from the database
        $query = "SELECT ID, Username, Email, Phone FROM loginform WHERE Username = '$username' AND Password = SHA('$password')";
        $data = mysqli_query($dbc, $query);

        if (mysqli_num_rows($data) == 1) {
          // The login is OK. Set the userid, username, and city session variables. Set the cookies. Redirect to the home page
          $row = mysqli_fetch_array($data);
          
          $_SESSION['userid'] = $row['ID'];
          $_SESSION['username'] = $row['Username'];
          $_SESSION['email'] = $row['Email'];
		  $_SESSION['phone'] = $row['Phone'];
          
          setcookie('userid', $row['ID'], time() + (60 * 60 * 24 * 30));    // expires in 30 days
          setcookie('username', $row['Username'], time() + (60 * 60 * 24 * 30));  // expires in 30 days
          setcookie('email', $row['Email'], time() + (60 * 60 * 24 * 30));  // expires in 30 days
          setcookie('phone', $row['Phone'], time() + (60 * 60 * 24 * 30));  // expires in 30 days
		  
		  
			echo '<script type="text/JavaScript"> 
				 window.alert("You logged in successfully!");
				 </script>';
				 

        }
        else {
          // The username or password are incorrect so set an error message
		  			echo '<script type="text/JavaScript"> 
				 window.alert("Sorry, the username/password you entered is not correct. Try again!");
				 </script>';
        }
      }
      else {
        // The username/password weren't entered so set an error message
        echo '<script type="text/JavaScript"> 
				 window.alert("You did not enter the username or password.");
				 </script>';
      }
    }
  }
  
  
  

  
  
//house_1
    if(isset($_POST['booking_button'])) {
    // Get the signup data from the POST


	$userid = $_SESSION['userid']; //mysqli_real_escape_string is used to enhance security
    //$house_number = mysqli_real_escape_string($dbc, trim($_POST['house_number']));
		 $house_number = mysqli_real_escape_string($dbc, trim($_POST['house_number_1']));
    $checkin = mysqli_real_escape_string($dbc, trim(date("Y-m-d", strtotime($_POST['checkin']))));
    $checkout = mysqli_real_escape_string($dbc, trim(date("Y-m-d", strtotime($_POST['checkout']))));
	 $comment = mysqli_real_escape_string($dbc, trim($_POST['visitor_message']));
	 
	





    if (!empty($userid) && !empty($house_number) && !empty($checkin) && !empty($checkout))  {
      // Check that the provided username does not yet exist in the database

        // The username does not exist yet, so insert the data into the database.
      	// No need to add userid, because teh userid is configured with AUTO-INCREMENT in the table. MySQL will automatically generate the userid
        // SHA is used to encrypt the password
		
      	$query = "INSERT INTO booking (UserID, HouseNumber, StartDate, EndDate, Approved, ToCancel, Comment) VALUES ('$userid', '$house_number', '$checkin', '$checkout', 0, 0, '$comment')"; 
        mysqli_query($dbc, $query);
        


        // Confirm success with the user
        

		  		 echo '<script type="text/JavaScript"> 
				 window.alert("You booked the house successfully");
				 </script>';


    }
    else {
		echo '<script type="text/JavaScript"> 
				 window.alert("You must enter all of the booking data.");
				 </script>';
 
    }
  }
  
  
  
  $datesArray_1 = array(
  array("1900-01-15", "2022-01-19"));
  
  $result = mysqli_query($dbc, "SELECT StartDate, EndDate FROM booking WHERE HouseNumber=1"); 

//Putting the database info to the table
 while($res = mysqli_fetch_array($result)) {
    array_push ($datesArray_1, array($res['StartDate'], $res['EndDate']));
 }
 
 
//house 2

    if(isset($_POST['booking_button_2'])) {
    // Get the signup data from the POST


	$userid = $_SESSION['userid']; //mysqli_real_escape_string is used to enhance security
    //$house_number = mysqli_real_escape_string($dbc, trim($_POST['house_number']));
		 $house_number = mysqli_real_escape_string($dbc, trim($_POST['house_number_2']));
    $checkin = mysqli_real_escape_string($dbc, trim(date("Y-m-d", strtotime($_POST['checkin']))));
    $checkout = mysqli_real_escape_string($dbc, trim(date("Y-m-d", strtotime($_POST['checkout']))));
	 $comment = mysqli_real_escape_string($dbc, trim($_POST['visitor_message']));
	 
	





    if (!empty($userid) && !empty($house_number) && !empty($checkin) && !empty($checkout))  {
      // Check that the provided username does not yet exist in the database

        // The username does not exist yet, so insert the data into the database.
      	// No need to add userid, because teh userid is configured with AUTO-INCREMENT in the table. MySQL will automatically generate the userid
        // SHA is used to encrypt the password
		
      	$query = "INSERT INTO booking (UserID, HouseNumber, StartDate, EndDate, Approved, ToCancel, Comment) VALUES ('$userid', '$house_number', '$checkin', '$checkout', 0, 0, '$comment')"; 
        mysqli_query($dbc, $query);
        


        // Confirm success with the user
        

		  		 echo '<script type="text/JavaScript"> 
				 window.alert("You booked the house successfully");
				 </script>';


    }
    else {
		echo '<script type="text/JavaScript"> 
				 window.alert("You must enter all of the booking data.");
				 </script>';
 
    }
  }
  
  
  
  $datesArray_2 = array(
  array("1900-01-15", "2022-01-19"));
  
  $result = mysqli_query($dbc, "SELECT StartDate, EndDate FROM booking WHERE HouseNumber=2"); 

//Putting the database info to the table
 while($res = mysqli_fetch_array($result)) {
    array_push ($datesArray_2, array($res['StartDate'], $res['EndDate']));
 }
 


//house 3
  
  
      if(isset($_POST['booking_button_3'])) {
    // Get the signup data from the POST


	$userid = $_SESSION['userid']; //mysqli_real_escape_string is used to enhance security
    //$house_number = mysqli_real_escape_string($dbc, trim($_POST['house_number']));
		 $house_number = mysqli_real_escape_string($dbc, trim($_POST['house_number_3']));
    $checkin = mysqli_real_escape_string($dbc, trim(date("Y-m-d", strtotime($_POST['checkin']))));
    $checkout = mysqli_real_escape_string($dbc, trim(date("Y-m-d", strtotime($_POST['checkout']))));
	 $comment = mysqli_real_escape_string($dbc, trim($_POST['visitor_message']));
	 
	





    if (!empty($userid) && !empty($house_number) && !empty($checkin) && !empty($checkout))  {
      // Check that the provided username does not yet exist in the database

        // The username does not exist yet, so insert the data into the database.
      	// No need to add userid, because teh userid is configured with AUTO-INCREMENT in the table. MySQL will automatically generate the userid
        // SHA is used to encrypt the password
		
      	$query = "INSERT INTO booking (UserID, HouseNumber, StartDate, EndDate, Approved, ToCancel, Comment) VALUES ('$userid', '$house_number', '$checkin', '$checkout', 0, 0, '$comment')"; 
        mysqli_query($dbc, $query);
        


        // Confirm success with the user
        

		  		 echo '<script type="text/JavaScript"> 
				 window.alert("You booked the house successfully");
				 </script>';


    }
    else {
		echo '<script type="text/JavaScript"> 
				 window.alert("You must enter all of the booking data.");
				 </script>';
 
    }
  }
  
  
  
  $datesArray_3 = array(
  array("1900-01-15", "2022-01-19"));
  
  $result = mysqli_query($dbc, "SELECT StartDate, EndDate FROM booking WHERE HouseNumber=3"); 

//Putting the database info to the table
 while($res = mysqli_fetch_array($result)) {
    array_push ($datesArray_3, array($res['StartDate'], $res['EndDate']));
 }
 
 
  mysqli_close($dbc);
  
  
   if (empty($_SESSION['userid'])) {
    echo '<p class="error">' . $error_msg . '</p>';
   }
   
   
   ?>