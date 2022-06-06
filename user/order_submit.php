<?php
include ('../dbase/dbaseconnection.php');

	$id = $_GET['id'];
	$id_no = $_GET['idno'];
	$cnote = $_GET['cnotes'];
	$date = date("Ymd");
	$price = $_GET['pprice'];
	$mop_sel = $_GET['mop'];



		mysqli_query($conn, "UPDATE cart SET mop='$mop_sel', status='Waiting for Approval', ordercode='$date$id_no', Cust_Notes='$cnote' WHERE C_ID='$id' and ordercode=''")
		or die(mysqli_error($conn));
		
		echo "<script type='text/javascript'>alert('Successfully Ordered!, please wait');</script>";
		echo "<script> document.location='cart.php' </script>";
	

?>

