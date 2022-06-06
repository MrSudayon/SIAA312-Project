<?php
include ("../dbase/dbaseconnection.php");// Using database connection file here
		
	$tid = $_GET['id'];
	$cid = $_GET['cid'];
	$cqty = $_GET['cqty'];
	$ctot = $_GET['ctot'];
	$cdate = $_GET['cdate'];
	$dstat = 'Completed'; // get value through query string
			
	
		$UPDT ="UPDATE cart SET status='Completed' where ordercode='$tid'";// update query
		$conn->query($UPDT); 
		mysqli_query($conn,"INSERT INTO sales(ORDER_ID,C_ID,QTY,TOTAL,TRANSDATE,STATUS,PROCESSBY,DELIVEREDBY) VALUES('$tid','$cid','$cqty','$ctot','$cdate','$dstat','rroxas','rider1')")or die(mysqli_error($conn));
		
			?>
				<script>
					alert("Order has completed");
				</script>
			<?php

		header("refresh:0;URL=../rider/rider.php"); // redirects to all records page
		mysqli_close($conn);// Close connection
?>