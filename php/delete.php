<?php
//including the database connection file
  require_once('../config.php');
  
  
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  $book_id = $_GET['id'];
  
  
  
  

	  $query = "DELETE FROM booking where BookingID=$book_id"; 
        mysqli_query($dbc, $query);

  



header("Location:../table.php");

?>