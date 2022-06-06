<?php 

include('../dbase/dbaseconnection.php');
	$total = 0;
	
		$prod_id = $_GET['id'];
		$id_no = $_GET['id_no'];
		$price = $_GET['price'];
		
		$total=$price*1;
	

		$query2=mysqli_query($conn,"select * from cart where PROD_ID='$prod_id' and C_ID='$id_no' and status='Pending'")or die(mysqli_error($conn));
		$count=mysqli_num_rows($query2);
		
	
		if ($count>0)
		{	
			echo "<script type='text/javascript'>
					alert('Already on the cart!');
				  </script>";
			header("refresh:0; url = ../user/c_dashboard.php");
			
		}
		else
		{			
			$date=date("Y-m-d");
			$sql = mysqli_query($conn,"INSERT INTO cart(C_ID,PROD_ID,qty,total,price,status,date_added) VALUES('$id_no','$prod_id','1','$total','$price','Pending','$date')")or die(mysqli_error($conn));
			mysqli_free_result($sql);
				echo "<script type='text/javascript'>
						alert('Successfully Added!');
					  </script>";
				header("refresh:0; url = ../user/c_dashboard.php");
				
		}
?>