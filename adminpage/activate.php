<?php
include"../dbase/dbaseconnection.php";// Using database connection file here
		
	$id = $_GET['id']; // get id through query string
		if(isset($_GET['id'])){
			$id = $_GET['id'];
		}			
		$UPDT ="UPDATE user SET U_STATUS='ACTIVE' where EMP_ID='$id'";// update query
		$conn->query($UPDT);
		mysqli_close($conn); // Close connection
			
		?>
			<script>
				alert("Account has been Activated");
			</script>
		<?php
			
	header("refresh:0;URL=../adminpage/useraccounts.php"); // redirects to all records page
	
?>