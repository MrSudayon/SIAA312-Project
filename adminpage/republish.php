<?php
include"../dbase/dbaseconnection.php";// Using database connection file here
		
	$id = $_GET['id']; // get id through query string
		if(isset($_GET['id'])){
			$id = $_GET['id'];
		}			
		$UPDT ="UPDATE products SET AVAILABILITY='Available' where PROD_ID='$id'";// update query
		$conn->query($UPDT);
		mysqli_close($conn); // Close connection
			
		?>
			<script>
				alert("Product has been Published");
			</script>
		<?php
			
	header("refresh:0;URL=../adminpage/archive.php"); // redirects to all records page
	
?>