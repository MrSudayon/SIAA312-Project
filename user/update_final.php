<?php
	include ('../connect.php');

	$id = $_POST['id'];
	$pid = $_POST['p_id'];
	$price = $_POST['price'];
	$quant = $_POST['quant'];
		
	$total = (int)$price*$quant;
	
	if(isset($_POST['update'])) {
		$result = $db->prepare("UPDATE cart SET qty='$quant', total='$total' WHERE ID = :memid");
		$result->bindParam(':memid', $id);
		$result->execute();

		echo "<script type='text/javascript'>alert('Successfully updated!');</script>";
		echo "<script> document.location='cart.php' </script>";
		
	} elseif (isset($_POST['back'])) {
		echo "<script> document.location='cart.php' </script>";
	}
/*
include('../dbase/dbaseconnection.php');

if(isset($_POST['update'])) {
		$pid = $_POST['p_id'];
		$price = $_POST['price'];
		$quant = $_POST['quant'];
		
		$total = $price * $quant;
		
		mysqli_query($conn,"UPDATE cart SET qty='$quant', total='$total' where PROD_ID='$pid'")or die(mysqli_error($conn));

		echo "<script type='text/javascript'>alert('Successfully updated!');</script>";
		echo "<script> document.location='cart.php' </script>";  

} elseif(isset($_POST['back'])) {
	echo "<script>document.location='cart.php'</script>";  
}
*/
?>
