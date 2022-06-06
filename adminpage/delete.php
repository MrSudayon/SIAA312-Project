<?php
include"../dbase/dbaseconnection.php";// Using database connection file here

	$id = $_GET['id']; // get id through query string

	$del = "UPDATE products SET AVAILABILITY='Archive' where PROD_ID = '$id'"; // delete query
	$conn->query($del);
	
    mysqli_close($conn); // Close connection
   header("location:../adminpage/itemlist.php"); // redirects to all records page
    exit;	

?>