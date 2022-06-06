<?php
include "../dbase/dbaseconnection.php";// Using database connection file here
		
	$ordercode = $_GET['ordercode']; // get id through query string
			
		$UPDT ="UPDATE cart SET status='declined' where ordercode='$ordercode'";// delete query
		$conn->query($UPDT);
		mysqli_close($conn); // Close connection
			
		?>
			<script>
				alert("Order has been declined");
			</script>
		<?php
			
	header("refresh:0;URL=../admin/admin_dash.php"); // redirects to all records page
	
?>