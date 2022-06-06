<?php
	include "../dbase/dbaseconnection.php";
	require_once ('../user/auth.php'); 
	
    $id_no=$_SESSION['SESS_MEMBER_ID'];
    
    $query2=mysqli_query($conn,"select * from cart where C_ID='$id_no' and status='Pending'")or die(mysqli_error($conn));
    $count=mysqli_num_rows($query2);
     if( $id_no==null){
		
	require_once ('../user/auth.php'); 
	
	header("refresh:0;URL=../user/signin.php"); // redirects to all records page
	}
?>
<html>

	<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/sales.css">
	</head>
	<body>
	<form action="../admin/admin_dash.php" method="POST" enctype='multipart/form-data'>
		
		<div class="side-menu">
			<img src="../icons/logo.png" class="logopng">
        	<center><h1>Employee</h1></center>
			<ul>
				<a href="../admin/dboard.php"><li><img src="dashboard (2).png" alt="">&nbsp; <span>Dashboard</span> </li></a>
				<a href="../admin/admin_dash.php"><li><img src="payment.png" alt="">&nbsp; <span>Orders</span> </li></a>
				<a href="../admin/order.php"><li><img src="settings.png" alt="">&nbsp;<span>Preparing</span> </li></a>
				<a href="../user/logout.php"><li><img src="help-web-button.png" alt="">&nbsp; <span>Logout</span></li></a>
			</ul>
		</div>
		<div class="container2">
			<center><h1 class="mainheader">BOSS B BURGER, FRIES & SANDWICHES</h1>
			<h2 class="header">Order Approval </h2></center>
			
					<?php
							//$sel = "SELECT * FROM cart where status='Waiting for Approval'";
							$sel = "SELECT * FROM user AS u 
									INNER JOIN cart AS c 
									ON (u.EMP_ID = c.C_ID) 
									WHERE status='Waiting for Approval'";
							$result = $conn->query($sel);

							if ($result->num_rows > 0) 
								{
									// output data of each row
						
									echo "<table border=1 cellpadding=5 class=tablein>";
									echo "<thead>";
									echo "<tbody>";
									echo "<tr bgcolor=#363636 style='color:white'>";
									echo "<th>Customer ID";
									echo "<th>Address";
									echo "<th>Product ID";
									echo "<th>Order ID";
									echo "<th>QTY";
									echo "<th>Total";
									echo "<th>transaction date";
									echo "<th>Description";
									echo "<th>Mode of Payment";
									echo "<th>Status";
									echo "<th colspan=2>Action";
									echo "</tr>";
						
									while($row = $result->fetch_assoc()) 
									{
										echo "<tr bgcolor=white>";
										echo "<th>" . $row["C_ID"];
										echo "<th>" . $row["FULLADD"];
										echo "<th>" . $row["PROD_ID"];
										echo "<th>" . $row["ordercode"];
										echo "<th>" . $row["qty"];
										echo "<th>" . $row["total"];
										echo "<th>" . $row["date_added"];
										echo "<th>" . $row['Cust_Notes'];
										echo "<th>" . $row['mop'];
										echo "<th>" . $row["status"];
										?>
										<th><a href="../admin/updatestat.php?ordercode=<?php echo $row['ordercode']; ?>" style='background-color:#3c99dc; margin:5px; padding:8px; border-radius:5px;'>Approve</a>
										<th><a href="../admin/declined.php?ordercode=<?php echo $row['ordercode']; ?>" style='background-color:red; margin:5px; padding:8px; border-radius:5px;'>Decline</a>
										<?php
							
									}
							
										echo "</tr>";
										echo "</form>";
										echo "</thead>";
										echo "</tbody>";
										echo "</table>";
							
								}else{
									
									echo "<CENTER><p  style='color:red' font-size='3em'>0 results</p></CENTER>";
												
								}
							
										$conn->close();
								
					?>
		</div>
	</form>
	</body>
</html>