<?php
include"../dbase/dbaseconnection.php";// Using database connection file here
		
	$id = $_GET['id']; // get id through query string
		if(isset($_GET['id'])){
			$id = $_GET['id'];
		}			
		$UPDT ="UPDATE user SET U_STATUS='DEACTIVATED' where EMP_ID='$id'";// delete query
		$conn->query($UPDT);
		mysqli_close($conn); // Close connection
			
		?>
			<script>
				alert("Account has been Deactivated");
			</script>
		<?php
			
	header("refresh:0;URL=../adminpage/useraccounts.php"); // redirects to all records page
	
?>