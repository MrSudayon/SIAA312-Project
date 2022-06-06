<?php
	include ("../dbase/dbaseconnection.php");
?>
<html>

	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="../icons/logo.png">
	<title> Delivery </title>
		<link rel="stylesheet" href="../css/rider.css">
	</head>
	<body>
	<form action="../rider/rider.php" method="POST" enctype='multipart/form-data'>
		<div class="container2">
			<div class="header">
				<h2 class="header"><img src="../icons/logo.png" class="logopng">&nbsp&nbspOrder Delivery Confirmation</h2>
			</div>		
					<?php
							//$sel = "SELECT * FROM cart where status='Waiting for Approval'";
							$sel = "SELECT * FROM user AS u 
									INNER JOIN cart AS c 
									ON (u.EMP_ID = c.C_ID) 
									WHERE status='On Delivery'";
							$result = $conn->query($sel);

							if ($result->num_rows > 0) 
								{
									// output data of each row
						
									echo "<table border=1 cellpadding=5 class=tablein>";
									echo "<thead>";
									echo "<tbody>";
									echo "<tr bgcolor=#363636 style='color:white'>";
									echo "<th>Order ID";
									echo "<th>Customer Name";
									echo "<th>Address";
									echo "<th>QTY";
									echo "<th>Mode of Payment";
									echo "<th>Remarks";
									echo "<th>To be paid";
									echo "<th>transaction date";
									echo "<th colspan>Action";
									echo "</tr>";
						
									while($row = $result->fetch_assoc()) 
									{
										echo "<tr bgcolor=white>";
										echo "<th>" . $row["ordercode"];
										echo "<th>" . $row["EMP_FNAME"]," ", $row['EMP_LNAME'];
										echo "<th>" . $row["FULLADD"];
										echo "<th>" . $row["qty"];
										echo "<th>" . $row["mop"];
										echo "<th>" . $row["Cust_Notes"];
										echo "<th>" . $row["total"];
										echo "<th>" . $row["date_added"];
										
										?>
										<th> <a href="../rider/complete.php?id=<?php echo $row['ordercode'];?>&cid=<?php echo $row["EMP_FNAME"]," ",$row['EMP_LNAME'];?>&cqty=<?php echo $row["qty"];?>&ctot=<?php echo $row["total"];?>&cdate=<?php echo $row["date_added"];?>&cst=<?php echo $row["status"];?>"style='background-color:#3c99dc; padding:8px; border-radius:5px; text-decoration: none; color: black;'>Delivered</a></th>
										<?php
							
									}
							
										echo "</tr>";
										echo "</form>";
										echo "</thead>";
										echo "</tbody>";
										echo "</table>";
							
								}else{
									
									echo "<CENTER><p  style='color:red' font-size='2em'>0 results</p></CENTER>";
												
								}
							
										$conn->close();
								
					?>
		</div>
	</form>
	</body>
</html>