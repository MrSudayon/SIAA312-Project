<?php
include"../dbase/dbaseconnection.php";// Using database connection file here
		
	    // get id through query string
		if(isset($_GET['ordercode'])){
			$ordercode = $_GET['ordercode'];
		}			
		$UPDT ="UPDATE cart SET status='On Delivery' where ordercode='$ordercode'";// delete query
		$conn->query($UPDT);
		mysqli_close($conn); // Close connection
			
		?>
			<script>
				alert("Order is On its way");
			</script>
		<?php
			
	header("refresh:0;URL=../admin/order.php"); // redirects to all records page
	
?>