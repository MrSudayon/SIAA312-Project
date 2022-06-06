<?php
include"../dbase/dbaseconnection.php";// Using database connection file here
	
	error_reporting(0);
	$id = $_GET['id']; // get id through query string
	
	$sr = "SELECT * FROM products WHERE PROD_ID ='$id'";
	$result = $conn->query($sr);
							
	if ($result->num_rows > 0) 
	{
		$row = mysqli_fetch_array($result);
															
			$ids = $row['PROD_ID'];
			$pn = $row['PROD_NAME'];
			$pa = $row['AVAILABILITY'];
			$pr = $row['PRICE'];
			$pc = $row['CATEGORY'];
	}
?>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/itemlist.css">
	</head>
	<body>
	<form action="../adminpage/update.php" method="POST" enctype='multipart/form-data'>
			<div class="side-menu">
			<img src="../icons/logo.png" class="logopng">
            <center><h1>ADMIN</h1></center>
			<ul>
				<a href="../adminpage/admin.php"><li><img src="dashboard (2).png" alt="">&nbsp; <span>Dashboard</span> </li></a>
				<a href="../adminpage/itemlist.php"><li><img src="dashboard (2).png" alt="">&nbsp; <span>Products</span> </li></a>
				<a href="../adminpage/useraccounts.php"><li><img src="reading-book (1).png" alt="">&nbsp;<span>Accounts</span> </li></a>
				<a href="../adminpage/archive.php"><li><img src="payment.png" alt="">&nbsp;<span>Archives</span> </li></a>
				<a href="../adminpage/sales.php"><li><img src="payment.png" alt="">&nbsp;<span>Sales</span> </li></a>
				<li><img src="help-web-button.png" alt="">&nbsp; <span>Logout</span></li>
			</ul>
		</div>
		<div class="container2">
			<center><h1 class="mainheader">BOSS B BURGER, FRIES & SANDWICHES</h1></center>
			<h2 class="header">Update Product</h2>
		
	<table border=1 cellpadding=5 class=tablein1>
					<thead>
						<tbody>
							<tr bgcolor=#363636 style='background-image: linear-gradient(#ffae42, #ff4500); color:white;'>
								<th>ID</th>
								<th>Product Name</th>
								<th>Category</th>
								<th>Price</th>
								<th>Availability</th>
							</tr>
							<tr style='background-color:white'>
								<th><input name="sid" value="<?php echo $ids; ?>" readonly ></th>
								<th><input name="prodname" value="<?php echo $pn; ?>"></th>
								<th><select value="<?php echo $pc; ?>" name="cat" autocomplete="off" required  placeholder="Category">
										<option value="">--------</option>
										<option value="Beverages">Beverages</option>
										<option value="Burgers">Burgers</option>
										<option value="Meals">Meals</option>
									</select>
								</th>
								<th><input value="<?php echo $pr;?>" name="pr"  autocomplete="off" required  placeholder="Price"></th>
								<th><select value="<?php echo $pa;?>" name="avail" autocomplete="off" required >
										<option value="Available">Available</option>
										<option value="Unavailable">Unavailable</option>
									
									</select>
								</th>
							</tr>
						</tbody>
					</thead>
				</table>

				<center><input name="update" type=submit class="upbut" value="Update"></center>
		</form>
	</body>
</html>
<?php
		$sid='';
		$prodname='';
		$pcat='';
		$pprice='';
		$availab='';
	error_reporting(0);
	if(isset($_POST['update'])){
		$sid=$_POST['sid'];
		$prodname=$_POST['prodname'];
		$pcat=$_POST['cat'];
		$pprice=$_POST['pr'];
		$availab=$_POST['avail'];		
		
		$UPDT ="UPDATE products SET PROD_NAME='$prodname',AVAILABILITY='$availab',PRICE = $pprice, CATEGORY='$pcat' WHERE PROD_ID= $sid";// delete query
		$conn->query($UPDT);
		mysqli_close($conn); // Close connection
		
		?>
			<script>
				alert("Product Updated");
			</script>
		<?php
		
		header("refresh:0;URL=../adminpage/itemlist.php"); // redirects to all records page
	}

?>