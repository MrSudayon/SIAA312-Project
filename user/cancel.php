<?php
	include('../connect.php');
	$id=$_GET['id'];
	
	$result = $db->prepare("DELETE FROM cart WHERE ID = :memid");
	$result->bindParam(':memid', $id);
	$result->execute();

		echo "<script type='text/javascript'>alert('Successfully Cancelled!');</script>";
		echo "<script>document.location='cart.php'</script>";  
?>