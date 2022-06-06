<?php
	include"../dbase/dbaseconnection.php";
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
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/sales.css">
	</head>
	<body>
	<form action="../adminpage/sales.php" method="POST" enctype='multipart/form-data'>
		
		<div class="side-menu">
			<img src="../icons/logo.png" class="logopng">
            <center><h1>ADMIN</h1></center>
			<ul>
				<a href="../adminpage/admin.php"><li><img src="dashboard (2).png" alt="">&nbsp; <span>Dashboard</span> </li></a>
				<a href="../adminpage/itemlist.php"><li><img src="dashboard (2).png" alt="">&nbsp; <span>Products</span> </li></a>
				<a href="../adminpage/useraccounts.php"><li><img src="reading-book (1).png" alt="">&nbsp;<span>Accounts</span> </li></a>
				<a href="../adminpage/archive.php"><li><img src="payment.png" alt="">&nbsp;<span>Archives</span> </li></a>
				<a href="../adminpage/sales.php"><li><img src="payment.png" alt="">&nbsp;<span>Sales</span> </li></a>
				<a href="../user/logout.php"><li><img src="help-web-button.png" alt="">&nbsp; <span>Logout</span></li></a>
			</ul>
		</div>
		<div class="container2">
			<center><h1 class="mainheader">BOSS B BURGER, FRIES & SANDWICHES</h1></center>
			<h2 class="header">Sales</h2>
			
			<div class="scon">
				<input name="search" class="searchtxt" autocomplete="off" autofocus placeholder="Search"><input name="sbut" type=submit class="searchbut" value="Search">
			</div>
					<?php
						if(isset($_POST['sbut'])){
							
							$search=$_POST['search'];
							$sel = "SELECT * FROM sales where ORDER_ID='$search'";
						}
						else{
							$sel = "SELECT * FROM sales";
						}
							$result = $conn->query($sel);

							if ($result->num_rows > 0) 
								{
									// output data of each row
						
									echo "<table border=1 cellpadding=5 class=tablein>";
									echo "<thead>";
									echo "<tbody>";
									echo "<tr bgcolor=#363636 style='color:white'>";
									echo "<th>ID";
									echo "<th>Order ID";
									echo "<th>Customer ID";
									echo "<th>QTY";
									echo "<th>Total";
									echo "<th>transaction date";
									echo "<th>Status";
									echo "<th>Process by";
									echo "<th>Delivered  by";
									echo "</tr>";
						
									while($row = $result->fetch_assoc()) 
									{
										echo "<tr bgcolor=white>";
										echo "<th>" . $row["ID"];
										echo "<th>" . $row["ORDER_ID"];
										echo "<th>" . $row["C_ID"];
										echo "<th>" . $row["QTY"];
										echo "<th>" . $row["TOTAL"];
										echo "<th>" . $row["TRANSDATE"];
										echo "<th>" . $row["STATUS"];
										echo "<th>" . $row["PROCESSBY"];
										echo "<th>" . $row["DELIVEREDBY"];
										
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